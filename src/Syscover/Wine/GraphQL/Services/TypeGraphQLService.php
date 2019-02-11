<?php namespace Syscover\Wine\GraphQL\Services;

use Syscover\Core\GraphQL\Services\CoreGraphQLService;
use Syscover\Wine\Models\Type;
use Syscover\Wine\Services\TypeService;

class TypeGraphQLService extends CoreGraphQLService
{
    public function __construct(Type $model, TypeService $service)
    {
        $this->model = $model;
        $this->service = $service;
    }
}
