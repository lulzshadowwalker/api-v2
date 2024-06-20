<?php

namespace App\Http\Controllers;

use App\Policies\V1\TicketPolicy;

class ApiController extends Controller
{
    protected $policyClass = TicketPolicy::class;

    protected function include(string $relationship): bool
    {
        $param = request()->get('include');

        if (!isset($param)) {
            return false;
        }

        $includeValues = explode(',', strtolower($param));

        return in_array(strtolower($relationship), $includeValues);
    }

    protected function isAble(string $ability, $model)
    {
        return $this->authorize($ability, [$model, $this->policyClass]);
    }
}
