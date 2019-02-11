<?php namespace Syscover\Wine\GraphQL\Services;

use Syscover\Core\GraphQL\Services\CoreGraphQLService;
use Syscover\Wine\Models\Grape;
use Syscover\Wine\Services\GrapeService;

class GrapeGraphQLService extends CoreGraphQLService
{
    public function __construct(Grape $model, GrapeService $service)
    {
        $this->model = $model;
        $this->service = $service;
    }
}
