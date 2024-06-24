<?php

namespace App\Http\Controllers;

use App\Policies\V1\TicketPolicy;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;

class ApiController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    protected $policyClass;

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
