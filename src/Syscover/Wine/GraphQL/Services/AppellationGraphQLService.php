<?php namespace Syscover\Wine\GraphQL\Services;

use Syscover\Core\GraphQL\Services\CoreGraphQLService;
use Syscover\Wine\Models\Appellation;
use Syscover\Wine\Services\AppellationService;

class AppellationGraphQLService extends CoreGraphQLService
{
    public function __construct(Appellation $model, AppellationService $service)
    {
        $this->model = $model;
        $this->service = $service;
    }
}
