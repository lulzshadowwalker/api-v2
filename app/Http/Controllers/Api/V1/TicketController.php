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
use App\Policies\V1\TicketPolicy;

class TicketController extends ApiController
{
    use ApiResponses;

    protected $policyClass = TicketPolicy::class;

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
        $this->isAble('create', Ticket::class);
        $ticket = Ticket::create($request->mappedAttributes())->load('author');
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
    public function update(V1UpdateTicketRequest $request, Ticket $ticket)
    {
        $this->isAble('update', $ticket);
        $ticket->update($request->mappedAttributes());
        return TicketResource::make($ticket);
    }

    public function replace(ReplaceTicketRequest $request, Ticket $ticket)
    {
        $this->isAble('replace', $ticket);
        $ticket->update($request->mappedAttributes());
        return TicketResource::make($ticket);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ticket $ticket)
    {
        $this->isAble('delete', $ticket);
        $ticket->delete();
        return $this->ok("Ticket with id {$ticket->id} has been deleted");
    }
}
