<?php

return [
    'SERVICE_DISCOVERY_ADDRESS' => env('SERVICE_DISCOVERY_ADDRESS', '127.0.0.1'),
    'SERVICE_NAME' => env('SERVICE_NAME', env('APP_NAME')),
    'SERVICE_HOST' => env('SERVICE_HOST', env('APP_URL')),
    'SERVICE_PORT' => env('SERVICE_PORT', '80'),
    'SERVICE_TTL' => env('SERVICE_TTL', 300),
    'response_model' => \AngusDV\DiscoveryClient\Entities\PresenceResponse::class,
    'discoverer_model' => \AngusDV\DiscoveryClient\Entities\ServiceDiscoverer::class,
    'service_response_model' => \AngusDV\DiscoveryClient\Entities\ServiceResponse::class,
];
