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
     * Get all tickets
     *
     * @group Tickets
     * @queryParam sort string Data field(s) to sort by. Separate multiple fields with commas. Denote descending sort with a minus sign. Example: sort=title,-createdAt
     * @queryParam filter[status] Filter by status code: A, C, H, X. No-example
     * @queryParam filter[title] Filter by title. Wildcards are supported. Example: *fix*
     */
    public function index(TicketFilter $filters)
    {
        return TicketResource::collection(Ticket::filter($filters)->paginate());
    }


    /**
     * Create a ticket
     *
     * Creates a new ticket record. Users can only create tickets for themselves. Managers can create tickets for any user.
     *
     * @group Tickets

     * @response 200 {"data":{"type":"ticket","id":107,"attributes":{"title":"asdfasdfasdfasdfasdfsadf","description":"test ticket","status":"A","createdAt":"2024-03-26T04:40:48.000000Z","updatedAt":"2024-03-26T04:40:48.000000Z"},"relationships":{"author":{"data":{"type":"user","id":1},"links":{"self":"http:\/\/localhost:8000\/api\/v1\/authors\/1"}}},"links":{"self":"http:\/\/localhost:8000\/api\/v1\/tickets\/107"}}}
     */
    public function store(V1StoreTicketRequest $request)
    {

        $this->isAble('create', Ticket::class);
        $ticket = Ticket::create($request->mappedAttributes())->load('author');
        return TicketResource::make($ticket);
    }

    /**
     * Show a specific ticket.
     *
     * Display an individual ticket.
     *
     * @group Tickets
     */
    public function show(Ticket $ticket)
    {
        if ($this->include('author')) {
            return new TicketResource($ticket->load('author'));
        }

        return new TicketResource($ticket);
    }

    /**
     * Update Ticket
     *
     * Update the specified ticket in storage.
     *
     * @group Tickets
     */
    public function update(V1UpdateTicketRequest $request, Ticket $ticket)
    {
        $this->isAble('update', $ticket);
        $ticket->update($request->mappedAttributes());
        return TicketResource::make($ticket);
    }

    /**
     * Replace Ticket
     *
     * Replace the specified ticket in storage.
     *
     * @group Tickets
     */
    public function replace(ReplaceTicketRequest $request, Ticket $ticket)
    {
        $this->isAble('replace', $ticket);
        $ticket->update($request->mappedAttributes());
        return TicketResource::make($ticket);
    }


    /**
     * Delete ticket.
     *
     * @group Tickets
     */
    public function destroy(Ticket $ticket)
    {
        $this->isAble('delete', $ticket);
        $ticket->delete();
        return $this->ok("Ticket with id {$ticket->id} has been deleted");
    }
}
