<?php

namespace App\GraphQL\Queries;

use Illuminate\Support\Facades\Auth;

class AuthUser
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        return Auth::user();
    }
}
