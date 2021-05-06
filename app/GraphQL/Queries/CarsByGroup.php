<?php

namespace App\GraphQL\Queries;

use App\Models\Car;

class CarsByGroup
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        switch ($args['group']) {
            case 'MOST_POPULAR' :
                return Car::where('popularity', '>=', 91)->take(10)->get();
            case 'LATEST' :
                return Car::orderBy('built_year', 'desc')->take(10)->get();
            default :
                return Car::where('group',$args['group'])->take(10)->get();
        }
    }
}
