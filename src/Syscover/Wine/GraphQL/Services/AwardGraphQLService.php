<?php namespace Syscover\Wine\GraphQL\Services;

use Syscover\Core\GraphQL\Services\CoreGraphQLService;
use Syscover\Wine\Models\Award;
use Syscover\Wine\Services\AwardService;

class AwardGraphQLService extends CoreGraphQLService
{
    public function __construct(Award $model, AwardService $service)
    {
        $this->model = $model;
        $this->service = $service;
    }
}
