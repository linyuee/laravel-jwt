<?php

namespace Lyue\LaravelJwt;

use Illuminate\Support\Facades\Facade;

class JwtFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Jwt';
    }
}
