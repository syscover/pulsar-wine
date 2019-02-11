<?php namespace Syscover\Wine\GraphQL\Services;

use Syscover\Core\GraphQL\Services\CoreGraphQLService;
use Syscover\Wine\Models\Family;
use Syscover\Wine\Services\FamilyService;

class FamilyGraphQLService extends CoreGraphQLService
{
    public function __construct(Family $model, FamilyService $service)
    {
        $this->model = $model;
        $this->service = $service;
    }
}
