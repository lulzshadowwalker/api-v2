<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class BaseTicketRequest extends FormRequest
{
    public function mappedAttributes(): array
    {
        $allowedAttributes = [
            'data.attributes.title' => 'title',
            'data.attributes.description' => 'description',
            'data.attributes.status' => 'status',
            'data.attributes.createdAt' => 'created_at',
            'data.attributes.updatedAt' => 'updated_at',
            'data.relationships.author.data.id' => 'user_id',
        ];

        $availabledAttributes = [];
        foreach ($allowedAttributes as $key => $value) {
            if ($this->has($key)) {
                $availabledAttributes[$value] = $this->input($key);
            }
        }

        return $availabledAttributes;
    }

    public function messages(): array
    {
        return [
            'data.attributes.status' => 'The status field must be either OPEN or CLOSED.'
        ];
    }
}
