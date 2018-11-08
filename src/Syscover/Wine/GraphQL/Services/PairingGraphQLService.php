<?php namespace Syscover\Wine\GraphQL\Services;

use Syscover\Core\GraphQL\Services\CoreGraphQLService;
use Syscover\Wine\Models\Pairing;
use Syscover\Wine\Services\PairingService;

class PairingGraphQLService extends CoreGraphQLService
{
    protected $modelClassName = Pairing::class;
    protected $serviceClassName = PairingService::class;
}