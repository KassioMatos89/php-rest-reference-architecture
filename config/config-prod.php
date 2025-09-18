<?php

use ByJG\Config\DependencyInjection as DI;
use ByJG\JwtWrapper\JwtHashHmacSecret;
use ByJG\JwtWrapper\JwtKeyInterface;

return [
    JwtKeyInterface::class => DI::bind(JwtHashHmacSecret::class)
        ->withConstructorArgs(['qECJ1Vc57DV/78q9mgeqoQtE0fWcqGwKXBERll0BAhR/U151taAbiLY1O2ylz6WPkHz71fXWyC8LpWswX7i4oA=='])
        ->toSingleton(),
];
