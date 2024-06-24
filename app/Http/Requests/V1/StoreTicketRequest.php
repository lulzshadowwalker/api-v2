<?php

namespace App\Http\Requests\V1;

use App\Permissions\V1\Abilities;

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
        $user = $this->user();
        $authorIdAttr = $this->routeIs('tickets.store') ? 'data.relationships.author.data.id' : 'author';
        $authorRule =  'required|integer|exists:users,id';

        $rules =  [
            'data.attributes.title' => 'required|string',
            'data.attributes.description' => 'required|string',
            'data.attributes.status' => 'required|string|in:OPEN,CLOSED',
            $authorIdAttr => "$authorRule|size:$user->id"
        ];

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
}
