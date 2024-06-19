<?php

namespace App\Http\Controllers\Api\V1;

use App\ApiResponses;
use App\Http\Controllers\ApiController;
use App\Http\Filters\V1\TicketFilter;
use App\Http\Requests\V1\ReplaceTicketRequest;
use App\Http\Requests\V1\StoreTicketRequest as V1StoreTicketRequest;
use App\Http\Requests\V1\UpdateTicketRequest as V1UpdateTicketRequest;
use App\Http\Resources\V1\TicketResource;
use App\Models\Ticket;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class TicketController extends ApiController
{
    use ApiResponses;

    /**
     * Display a listing of the resource.
     */
    public function index(TicketFilter $filters)
    {
        return TicketResource::collection(Ticket::filter($filters)->paginate());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(V1StoreTicketRequest $request)
    {
        $model = [
            'title' => $request->input('data.attributes.title'),
            'description' => $request->input('data.attributes.description'),
            'status' => $request->input('data.attributes.status'),
            'user_id' => $request->input('data.relationships.author.data.id'),
        ];

        $ticket = Ticket::create($model)->load('author');
        return TicketResource::make($ticket);
    }

    /**
     * Display the specified resource.
     */
    public function show(Ticket $ticket)
    {
        if ($this->include('author')) {
            return new TicketResource($ticket->load('user'));
        }

        return new TicketResource($ticket);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(V1UpdateTicketRequest $request, $ticketId)
    {
        try {
            $ticket = Ticket::findOrFail($ticketId);
            $ticket->update($request->mappedAttributes());
            return TicketResource::make($ticket);
        } catch (ModelNotFoundException $e) {
            return $this->notFound("Ticket with id $ticketId not found");
        }
    }

    public function replace(ReplaceTicketRequest $request, $ticketId)
    {
        try {
            $ticket = Ticket::findOrFail($ticketId);
            $ticket->update($request->mappedAttributes());
            return TicketResource::make($ticket);
        } catch (ModelNotFoundException $e) {
            return $this->notFound("Ticket with id $ticketId not found");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($ticketId)
    {
        try {
            Ticket::findOrFail($ticketId)->delete();
            return $this->ok("Ticket with id $ticketId has been deleted");
        } catch (ModelNotFoundException $e) {
            return $this->notFound("Ticket with id $ticketId not found");
        }
    }
}
