<?php namespace Syscover\Wine\GraphQL\Services;

use Syscover\Core\GraphQL\Services\CoreGraphQLService;
use Syscover\Wine\Models\Pairing;
use Syscover\Wine\Services\PairingService;

class PairingGraphQLService extends CoreGraphQLService
{
    public function __construct(Pairing $model, PairingService $service)
    {
        $this->model = $model;
        $this->service = $service;
    }
}
