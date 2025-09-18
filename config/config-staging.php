<?php

use ByJG\Cache\Psr16\BaseCacheEngine;
use ByJG\Cache\Psr16\FileSystemCacheEngine;
use ByJG\Config\DependencyInjection as DI;
use ByJG\JwtWrapper\JwtHashHmacSecret;
use ByJG\JwtWrapper\JwtKeyInterface;

return [

    BaseCacheEngine::class => DI::bind(FileSystemCacheEngine::class)->toSingleton(),

    JwtKeyInterface::class => DI::bind(JwtHashHmacSecret::class)
        ->withConstructorArgs(['bDwPbUkie/gW9TBURp+XJLk9GnFq0Q4afHqMK4yYT3FBriA86Apo9fM7Kw4QneEvQ2nyS3D0n7CyT+9nwsADDg=='])
        ->toSingleton(),

];
