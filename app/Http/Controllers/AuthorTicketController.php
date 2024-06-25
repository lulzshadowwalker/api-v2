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

    /**
     * Get all tickets
     * 
     * Retrieves all tickets created by a specific user.
     * 
     * @group Author Tickets 
     * 
     * @urlParam author_id integer required The author's ID. No-example
     * 
     * @response 200 {"data":[{"type":"ticket","id":1,"attributes":{"title":"sed atque veniam","description":"Aliquid aut quia assumenda et quibusdam. Quam iste provident omnis iure nisi. Illo vel libero dolor voluptas. Odit quia cupiditate sed beatae soluta architecto eos ipsa.","status":"OPEN","createdAt":"2024-06-24T18:29:21.000000Z","updatedAt":"2024-06-24T18:29:21.000000Z"},"links":{"self":"http://localhost:8000/api/v1/tickets/1"},"relationships":{"author":{"data":{"type":"user","id":8},"links":{"self":"http://localhost:8000/api/v1/authors/8"}}}},{"type":"ticket","id":2,"attributes":{"title":"alias vel quidem","description":"Sed sed est non quibusdam quo non. Vel nam minima eum rerum.","status":"OPEN","createdAt":"2024-06-24T18:29:21.000000Z","updatedAt":"2024-06-24T18:29:21.000000Z"},"links":{"self":"http://localhost:8000/api/v1/tickets/2"},"relationships":{"author":{"data":{"type":"user","id":6},"links":{"self":"http://localhost:8000/api/v1/authors/6"}}}},{"type":"ticket","id":3,"attributes":{"title":"quasi consectetur et","description":"Voluptatem iusto aliquid incidunt et vero numquam. Voluptate sequi dicta ullam possimus possimus reprehenderit similique. Ea vel ea aut libero.","status":"OPEN","createdAt":"2024-06-24T18:29:21.000000Z","updatedAt":"2024-06-24T18:29:21.000000Z"},"links":{"self":"http://localhost:8000/api/v1/tickets/3"},"relationships":{"author":{"data":{"type":"user","id":8},"links":{"self":"http://localhost:8000/api/v1/authors/8"}}}},{"type":"ticket","id":4,"attributes":{"title":"animi dolor quidem","description":"Quisquam quo non ut dignissimos ab. Eaque et eos blanditiis in. Quis officia ab nisi ratione. Deleniti dignissimos facere temporibus ut quibusdam.","status":"OPEN","createdAt":"2024-06-24T18:29:21.000000Z","updatedAt":"2024-06-24T18:29:21.000000Z"},"links":{"self":"http://localhost:8000/api/v1/tickets/4"},"relationships":{"author":{"data":{"type":"user","id":1},"links":{"self":"http://localhost:8000/api/v1/authors/1"}}}},{"type":"ticket","id":5,"attributes":{"title":"et id ut","description":"Hic in nemo quis nesciunt. Non impedit repudiandae perspiciatis. Dolor earum a voluptas veniam officiis et error voluptas.","status":"OPEN","createdAt":"2024-06-24T18:29:21.000000Z","updatedAt":"2024-06-24T18:29:21.000000Z"},"links":{"self":"http://localhost:8000/api/v1/tickets/5"},"relationships":{"author":{"data":{"type":"user","id":1},"links":{"self":"http://localhost:8000/api/v1/authors/1"}}}},{"type":"ticket","id":6,"attributes":{"title":"veniam explicabo in","description":"Iusto error recusandae aut eveniet et. Et omnis ipsa ipsa dolorem a. Ea tenetur sed molestiae nihil et nihil velit sequi. Aliquam molestiae expedita quia officiis. Ipsum et odio sit temporibus aut facere quas.","status":"OPEN","createdAt":"2024-06-24T18:29:21.000000Z","updatedAt":"2024-06-24T18:29:21.000000Z"},"links":{"self":"http://localhost:8000/api/v1/tickets/6"},"relationships":{"author":{"data":{"type":"user","id":5},"links":{"self":"http://localhost:8000/api/v1/authors/5"}}}},{"type":"ticket","id":7,"attributes":{"title":"accusamus cumque voluptates","description":"Pariatur ducimus amet dolorum qui aperiam. Consectetur harum itaque et totam delectus. Consequatur quidem consectetur similique odit nam magnam.","status":"CLOSED","createdAt":"2024-06-24T18:29:21.000000Z","updatedAt":"2024-06-24T18:29:21.000000Z"},"links":{"self":"http://localhost:8000/api/v1/tickets/7"},"relationships":{"author":{"data":{"type":"user","id":1},"links":{"self":"http://localhost:8000/api/v1/authors/1"}}}},{"type":"ticket","id":8,"attributes":{"title":"aut enim ullam","description":"Eos odio illo ullam ut. Quod consequuntur fugit laborum tempora reiciendis sapiente. Cupiditate ut nostrum quas quos soluta enim ut esse.","status":"OPEN","createdAt":"2024-06-24T18:29:21.000000Z","updatedAt":"2024-06-24T18:29:21.000000Z"},"links":{"self":"http://localhost:8000/api/v1/tickets/8"},"relationships":{"author":{"data":{"type":"user","id":8},"links":{"self":"http://localhost:8000/api/v1/authors/8"}}}},{"type":"ticket","id":9,"attributes":{"title":"eos quis quidem","description":"Porro repellendus accusamus praesentium omnis distinctio sunt eum dolorum. Fugiat voluptatibus est cum quia fuga rem illum. Alias cum aliquid voluptas veniam. Laborum est porro sed cum dolorem. Aut qui rem natus.","status":"CLOSED","createdAt":"2024-06-24T18:29:21.000000Z","updatedAt":"2024-06-24T18:29:21.000000Z"},"links":{"self":"http://localhost:8000/api/v1/tickets/9"},"relationships":{"author":{"data":{"type":"user","id":8},"links":{"self":"http://localhost:8000/api/v1/authors/8"}}}},{"type":"ticket","id":10,"attributes":{"title":"ab ea quibusdam","description":"Et quod sed corporis magni ad minima repudiandae. Et est natus adipisci nihil deserunt doloribus distinctio. Eveniet qui atque eos dolorum expedita et quis.","status":"CLOSED","createdAt":"2024-06-24T18:29:21.000000Z","updatedAt":"2024-06-24T18:29:21.000000Z"},"links":{"self":"http://localhost:8000/api/v1/tickets/10"},"relationships":{"author":{"data":{"type":"user","id":6},"links":{"self":"http://localhost:8000/api/v1/authors/6"}}}},{"type":"ticket","id":11,"attributes":{"title":"vero id cumque","description":"Provident odit quis ut aut ad voluptas reiciendis. Provident porro delectus ad tempora vitae odit corporis. Laboriosam veritatis dolorem tempora sequi. Aut velit ullam consequatur ipsum magnam odit. Est eum aut incidunt qui.","status":"CLOSED","createdAt":"2024-06-24T18:29:21.000000Z","updatedAt":"2024-06-24T18:29:21.000000Z"},"links":{"self":"http://localhost:8000/api/v1/tickets/11"},"relationships":{"author":{"data":{"type":"user","id":4},"links":{"self":"http://localhost:8000/api/v1/authors/4"}}}},{"type":"ticket","id":12,"attributes":{"title":"sit quisquam officiis","description":"Eum velit sit eius non nesciunt vitae aut. Id et quam commodi in sunt et. Veritatis aut cupiditate quae.","status":"OPEN","createdAt":"2024-06-24T18:29:21.000000Z","updatedAt":"2024-06-24T18:29:21.000000Z"},"links":{"self":"http://localhost:8000/api/v1/tickets/12"},"relationships":{"author":{"data":{"type":"user","id":1},"links":{"self":"http://localhost:8000/api/v1/authors/1"}}}},{"type":"ticket","id":13,"attributes":{"title":"sit aut quasi","description":"Quis ut eos nobis iusto doloremque sunt. Molestias eum dolorem eos reprehenderit in eum. Quia a aut officiis.","status":"OPEN","createdAt":"2024-06-24T18:29:21.000000Z","updatedAt":"2024-06-24T18:29:21.000000Z"},"links":{"self":"http://localhost:8000/api/v1/tickets/13"},"relationships":{"author":{"data":{"type":"user","id":5},"links":{"self":"http://localhost:8000/api/v1/authors/5"}}}},{"type":"ticket","id":14,"attributes":{"title":"est ea doloremque","description":"Et saepe officiis unde omnis harum reiciendis. Omnis sed rerum omnis officiis. Eius provident consequuntur illo hic quae eos excepturi. Sunt nesciunt impedit sit reprehenderit magni id et.","status":"CLOSED","createdAt":"2024-06-24T18:29:21.000000Z","updatedAt":"2024-06-24T18:29:21.000000Z"},"links":{"self":"http://localhost:8000/api/v1/tickets/14"},"relationships":{"author":{"data":{"type":"user","id":8},"links":{"self":"http://localhost:8000/api/v1/authors/8"}}}},{"type":"ticket","id":15,"attributes":{"title":"praesentium pariatur sunt","description":"Ducimus nam dolores est beatae recusandae temporibus et. Veritatis voluptatem numquam sapiente et magni ipsum ad. Provident quae consequuntur aspernatur sunt et doloremque.","status":"OPEN","createdAt":"2024-06-24T18:29:21.000000Z","updatedAt":"2024-06-24T18:29:21.000000Z"},"links":{"self":"http://localhost:8000/api/v1/tickets/15"},"relationships":{"author":{"data":{"type":"user","id":7},"links":{"self":"http://localhost:8000/api/v1/authors/7"}}}}],"links":{"first":"http://localhost:8000/api/v1/tickets?page=1","last":"http://localhost:8000/api/v1/tickets?page=7","prev":null,"next":"http://localhost:8000/api/v1/tickets?page=2"},"meta":{"current_page":1,"from":1,"last_page":7,"links":[{"url":null,"label":"&laquo; Previous","active":false},{"url":"http://localhost:8000/api/v1/tickets?page=1","label":"1","active":true},{"url":"http://localhost:8000/api/v1/tickets?page=2","label":"2","active":false},{"url":"http://localhost:8000/api/v1/tickets?page=3","label":"3","active":false},{"url":"http://localhost:8000/api/v1/tickets?page=4","label":"4","active":false},{"url":"http://localhost:8000/api/v1/tickets?page=5","label":"5","active":false},{"url":"http://localhost:8000/api/v1/tickets?page=6","label":"6","active":false},{"url":"http://localhost:8000/api/v1/tickets?page=7","label":"7","active":false},{"url":"http://localhost:8000/api/v1/tickets?page=2","label":"Next &raquo;","active":false}],"path":"http://localhost:8000/api/v1/tickets","per_page":15,"to":15,"total":100}}
     *
     * @queryParam sort string Data field(s) to sort by. Separate multiple fields with commas. Denote descending sort with a minus sign. Example: sort=name
     * @queryParam filter[name] Filter by name. Wildcards are supported. 
     * @queryParam filter[email] Filter by email. Wildcards are supported.
     * @queryParam include Populate relationships. Example: include=author.
     */
    public function index(User $author, TicketFilter $filters)
    {
        return TicketResource::collection(
            Ticket::where('user_id', $author->id)->filter($filters)->paginate()
        );
    }

    /**
     * Create a ticket
     * 
     * Creates a ticket for the specific user.
     * 
     * @group Author Tickets 
     * @urlParam author_id integer required The author's ID. No-example
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
     * Update an author's ticket
     * 
     * Updates an author's ticket.
     * 
     * @group Author Tickets 
     * @urlParam author_id integer required The author's ID. No-example
     * @urlParam ticket_id integer required The ticket ID. No-example
     */
    public function update(UpdateTicketRequest $request, User $author, Ticket $ticket)
    {
        $this->isAble('update', $ticket);
        $ticket->update($request->mappedAttributes());
        return TicketResource::make($ticket);
    }

    /**
     * Replace an author's ticket
     * 
     * Replaces an author's ticket.
     * 
     * @group Author Tickets 
     * @urlParam author_id integer required The author's ID. No-example
     * @urlParam ticket_id integer required The ticket ID. No-example
     * @response {"data":{"type":"ticket","id":107,"attributes":{"title":"asdfasdfasdfasdfasdfsadf","description":"test ticket","status":"A","createdAt":"2024-03-26T04:40:48.000000Z","updatedAt":"2024-03-26T04:40:48.000000Z"},"relationships":{"author":{"data":{"type":"user","id":1},"links":{"self":"http:\/\/localhost:8000\/api\/v1\/authors\/1"}}},"links":{"self":"http:\/\/localhost:8000\/api\/v1\/tickets\/107"}}}
     */
    public function replace(ReplaceTicketRequest $request, User $author, Ticket $ticket)
    {
        $this->isAble('update', $ticket);
        $ticket->update($request->mappedAttributes());
        return TicketResource::make($ticket);
    }

    /** 
     * Delete an author's ticket
     * 
     * Deletes an author's ticket.
     * 
     * @group Author Tickets 
     * @urlParam author_id integer required The author's ID. No-example
     * @urlParam id integer required The ticket ID. No-example
     * @response 200 {
    "data": [],
    "message": "Ticket with id 2 has been deleted",
    "status": 200
}
     * @response 404 {"errors":{"status":404,"message":"Resource not found","source":""}}
     */
    public function destroy(User $author, Ticket $ticket)
    {
        $this->isAble('delete', $ticket);
        $ticket->delete();
        return $this->ok('Ticket deleted successfully');
    }
}
