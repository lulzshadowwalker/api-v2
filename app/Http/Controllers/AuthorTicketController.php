<?php

namespace App\Http\Controllers;

use App\ApiResponses;
use App\Http\Filters\V1\TicketFilter;
use App\Http\Requests\V1\ReplaceTicketRequest;
use App\Http\Requests\V1\StoreTicketRequest;
use App\Http\Requests\V1\UpdateTicketRequest;
use App\Http\Resources\V1\TicketResource;
use App\Models\Ticket;
use App\Models\User;
use App\Policies\V1\TicketPolicy;

class AuthorTicketController extends ApiController
{
    use ApiResponses;

    protected $policyClass = TicketPolicy::class;

    public function index(User $author, TicketFilter $filters)
    {
        return TicketResource::collection(
            Ticket::where('user_id', $author->id)->filter($filters)->paginate()
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(User $author, StoreTicketRequest $request)
    {
        $this->isAble('create', Ticket::class);
        $ticket = Ticket::create($request->mappedAttributes([
            'user_id' => $author->id,
        ]))->load('author');
        return TicketResource::make($ticket);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTicketRequest $request, User $author, Ticket $ticket)
    {
        $this->isAble('update', $ticket);
        $ticket->update($request->mappedAttributes());
        return TicketResource::make($ticket);
    }

    public function replace(ReplaceTicketRequest $request, User $author, Ticket $ticket)
    {
        $this->isAble('update', $ticket);
        $ticket->update($request->mappedAttributes());
        return TicketResource::make($ticket);
    }

    public function destroy(User $author, Ticket $ticket)
    {
        $this->isAble('delete', $ticket);
        $ticket->delete();
        return $this->ok('Ticket deleted successfully');
    }
}
