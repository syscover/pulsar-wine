<?php namespace Syscover\Wine\GraphQL\Services;

use Syscover\Core\GraphQL\Services\CoreGraphQLService;
use Syscover\Wine\Models\Presentation;
use Syscover\Wine\Services\PresentationService;

class PresentationGraphQLService extends CoreGraphQLService
{
    protected $model = Presentation::class;
    protected $serviceClassName = PresentationService::class;
}
