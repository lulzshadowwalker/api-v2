<?php

namespace App\Http\Controllers;

use App\ApiResponses;
use App\Http\Filters\V1\TicketFilter;
use App\Http\Requests\V1\ReplaceTicketRequest;
use App\Http\Requests\V1\StoreTicketRequest;
use App\Http\Requests\V1\UpdateTicketRequest;
use App\Http\Resources\V1\TicketResource;
use App\Models\Ticket;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class AuthorTicketController extends Controller
{
    use ApiResponses;

    public function index($authorId, TicketFilter $filters)
    {
        return TicketResource::collection(
            Ticket::where('user_id', $authorId)->filter($filters)->paginate()
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store($authorId, StoreTicketRequest $request)
    {
        $model = [
            'title' => $request->input('data.attributes.title'),
            'description' => $request->input('data.attributes.description'),
            'status' => $request->input('data.attributes.status'),
            'user_id' => $authorId,
        ];

        $ticket = Ticket::create($model)->load('author');
        return TicketResource::make($ticket);
    }

    public function destroy($authorId, $ticketId)
    {
        try {
            // TODO: Authorization
            Ticket::findOrFail($ticketId)->delete();
        } catch (ModelNotFoundException $e) {
            return $this->notFound("Ticket with id $ticketId not found");
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTicketRequest $request, $authorId, $ticketId)
    {
        try {
            $ticket = Ticket::findOrFail($ticketId);
            if ($ticket->user_id != $authorId) {
                // TODO: Proper Authorization
                return $this->unauthorized();
            }

            $ticket->update($request->mappedAttributes());
            return TicketResource::make($ticket);
        } catch (ModelNotFoundException $e) {
            return $this->notFound("Ticket with id $ticketId not found");
        }
    }

    public function replace(ReplaceTicketRequest $request, $authorId, $ticketId)
    {
        try {
            $ticket = Ticket::findOrFail($ticketId);
            if ($ticket->user_id != $authorId) {
                // TODO: Proper Authorization
                return $this->unauthorized();
            }

            $ticket->update($request->mappedAttributes());
            return TicketResource::make($ticket);
        } catch (ModelNotFoundException $e) {
            return $this->notFound("Ticket with id $ticketId not found");
        }
    }
}
