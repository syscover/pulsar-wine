<?php namespace Syscover\Wine\GraphQL\Services;

use Syscover\Core\GraphQL\Services\CoreGraphQLService;
use Syscover\Wine\Models\Presentation;
use Syscover\Wine\Services\PresentationService;

class PresentationGraphQLService extends CoreGraphQLService
{
    public function __construct(Presentation $model, PresentationService $service)
    {
        $this->model = $model;
        $this->service = $service;
    }
}
