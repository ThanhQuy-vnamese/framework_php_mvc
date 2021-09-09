<?php


namespace App\Core\Middleware;


use App\Core\Auth\Authentication;
use App\Core\Exception\ForbiddenException;

class AuthMiddleware extends BaseMiddleware
{
    public function __invoke(): void
    {
        $authentication = new Authentication();
        if (!$authentication->isLogin()) {
            throw new ForbiddenException();
        }
    }
}
