<?php

namespace App\Http\Filters\V1;


class TicketFilter extends QueryFilter
{
    protected $sortable = [
        'status',
        'title',
        'createdAt' => 'created_at',
        'updatedAt' => 'updated_at',
    ];

    public function include($relationships)
    {
        $allowedRelationships = ['author'];
        $relationships = explode(',', $relationships);
        $relationships = array_intersect($relationships, $allowedRelationships);
        return $this->builder->with($relationships);
    }

    public function status($value)
    {
        $values = explode(',', $value);
        return $this->builder->whereIn('status', $values);
    }

    public function createdAt($value)
    {
        $dates = explode(',', $value);

        if (count($dates) > 1) {
            return $this->builder->whereBetween('created_at', $dates);
        }

        return $this->builder->whereDate('created_at', $value);
    }

    public function updatedAt($value)
    {
        $dates = explode(',', $value);

        if (count($dates) > 1) {
            return $this->builder->whereBetween('updated_at', $dates);
        }

        return $this->builder->whereDate('updated_at', $value);
    }

    public function title($value)
    {
        $likeStr = str_replace('*', '%', $value);
        return $this->builder->where('title', 'like', $likeStr);
    }
}
