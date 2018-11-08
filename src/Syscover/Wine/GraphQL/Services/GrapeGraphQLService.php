<?php namespace Syscover\Wine\GraphQL\Services;

use Syscover\Core\GraphQL\Services\CoreGraphQLService;
use Syscover\Wine\Models\Grape;
use Syscover\Wine\Services\GrapeService;

class GrapeGraphQLService extends CoreGraphQLService
{
    protected $modelClassName = Grape::class;
    protected $serviceClassName = GrapeService::class;
}