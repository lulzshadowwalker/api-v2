<?php

namespace App\Http\Controllers;

use App\ApiResponses;
use App\Http\Filters\V1\TicketFilter;
use App\Http\Requests\V1\ReplaceTicketRequest;
use App\Http\Requests\V1\StoreTicketRequest;
use App\Http\Requests\V1\UpdateTicketRequest;
use App\Http\Resources\V1\TicketResource;
use App\Models\Ticket;
use App\Policies\V1\TicketPolicy;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Auth;

class AuthorTicketController extends ApiController
{
    use ApiResponses;

    protected $policyClass = TicketPolicy::class;

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
        try {
            $this->isAble('create', Ticket::class);

            $ticket = Ticket::create($request->mappedAttributes([
                'user_id' => $authorId
            ]))->load('author');
            return TicketResource::make($ticket);
        } catch (AuthorizationException $e) {
            return $this->forbidden('You are not authorized to create a ticket');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTicketRequest $request, $authorId, $ticketId)
    {
        try {
            $ticket = Ticket::where('id', $ticketId)
                ->where('user_id', $authorId)
                ->firstOrFail();

            $this->isAble('update', $ticket);

            $ticket->update($request->mappedAttributes());
            return TicketResource::make($ticket);
        } catch (ModelNotFoundException $e) {
            return $this->notFound("Ticket with id $ticketId not found");
        } catch (AuthorizationException $e) {
            return $this->forbidden('You are not authorized to update this ticket');
        }
    }

    public function replace(ReplaceTicketRequest $request, $authorId, $ticketId)
    {
        try {
            $ticket = Ticket::where('id', $ticketId)
                ->where('user_id', $authorId)
                ->firstOrFail();

            $this->isAble('update', $ticket);

            $ticket->update($request->mappedAttributes());
            return TicketResource::make($ticket);
        } catch (ModelNotFoundException $e) {
            return $this->notFound("Ticket with id $ticketId not found");
        } catch (AuthorizationException $e) {
            return $this->forbidden('You are not authorized to update this ticket');
        }
    }

    public function destroy($authorId, $ticketId)
    {
        try {
            $ticket = Ticket::where('id', $ticketId)
                ->where('user_id', $authorId)
                ->firstOrFail();

            $this->isAble('delete', $ticket);

            $ticket->delete();
            return $this->ok('Ticket deleted successfully');
        } catch (ModelNotFoundException $e) {
            return $this->notFound("Ticket with id $ticketId not found");
        } catch (AuthorizationException $e) {
            return $this->forbidden('You are not authorized to delete this ticket');
        }
    }
}
