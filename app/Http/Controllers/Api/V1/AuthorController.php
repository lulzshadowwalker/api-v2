<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\ApiController;
use App\Http\Filters\V1\AuthorFilter;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Resources\AuthorResource;
use App\Models\User;

class AuthorController extends ApiController
{
    /**
     * Get authors.
     * 
     * Retrieves all users that created a ticket.
     * 
     * @group Authors
     */
    public function index(AuthorFilter $filters)
    {
        return AuthorResource::collection(User::filter($filters)->paginate());
    }

    /**
     * Get an author.
     * 
     * Retrieves all users that created a ticket.
     * 
     * @group Showing Authors
     */
    public function show(User $author)
    {
        if ($this->include('tickets')) {
            return new AuthorResource($author->load('tickets'));
        }

        return new AuthorResource($author);
    }
}
