<?php

namespace App\Http\Requests\V1;

use App\Permissions\V1\Abilities;
use Illuminate\Support\Facades\Auth;

class StoreTicketRequest extends BaseTicketRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $isTicketsController = $this->routeIs('tickets.store');
        $authorIdAttr = $isTicketsController ? 'data.relationships.author.data.id' : 'author';
        $user = Auth::user();
        $authorRule =  'required|integer|exists:users,id';

        $rules =  [
            'data' => 'required|array',
            'data.attributes' => 'required|array',
            'data.attributes.title' => 'required|string',
            'data.attributes.description' => 'required|string',
            'data.attributes.status' => 'required|string|in:OPEN,CLOSED',
        ];

        if ($isTicketsController) {
            $rules['data.relationships'] = 'required|array';
            $rules['data.relationships.author'] = 'required|array';
            $rules['data.relationships.author.data'] = 'required|array';
        }

        // separate, for scribe documentation.
        $rules[$authorIdAttr] = $authorRule . '|size:' . $user->id;

        if ($user->tokenCan(Abilities::CreateTicket)) {
            $rules[$authorIdAttr] = $authorRule;
        }

        return $rules;
    }

    // nice. love it.
    protected function prepareForValidation()
    {
        if ($this->routeIs('api.v1.author.tickets.store')) {
            $this->merge([
                'author' => $this->route('author')
            ]);
        }
    }

    // scribe documentation
    public function bodyParameters()
    {
        $documentation = [
            'data.attributes.title' => [
                'description' => "The ticket's title (method)",
                'example' => 'No-example'
            ],
            'data.attributes.description' => [
                'description' => "The ticket's description",
                'example' => 'No-example',
            ],
            'data.attributes.status' => [
                'description' => "The ticket's status",
                'example' => 'No-example',
            ],
        ];

        if ($this->routeIs('tickets.store')) {
            $documentation['data.relationships.author.data.id'] = [
                'description' => 'The author assigned to the ticket.',
                'example' => 'No-example'
            ];
        } else {
            $documentation['author'] = [
                'description' => 'The author assigned to the ticket.',
                'example' => 'No-example'
            ];
        }

        return $documentation;
    }
}
