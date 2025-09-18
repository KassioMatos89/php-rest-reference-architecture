<?php

use ByJG\Config\DependencyInjection as DI;
use ByJG\JwtWrapper\JwtHashHmacSecret;
use ByJG\JwtWrapper\JwtKeyInterface;

return [
    JwtKeyInterface::class => DI::bind(JwtHashHmacSecret::class)
        ->withConstructorArgs(['227C3mTTxIF1lBpjqhap3G3Cdxk606/gCXxKvi21eUNLMEL3uR1ACDRokO/XBGo3aIyl6JEwVXykazqVet8aig=='])
        ->toSingleton(),
];

