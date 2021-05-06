<?php


namespace App\GraphQL\ErrorHandlers;


use Closure;
use GraphQL\Error\Error;
use Nuwave\Lighthouse\Execution\ErrorHandler;

class MyErrorHandler implements ErrorHandler
{
    public function __invoke(?Error $error, Closure $next): ?array
    {
        if($error->getCategory() == 'authException'){
            $error = New Error($error->getMessage());
        }

        return $next($error);
    }
}
