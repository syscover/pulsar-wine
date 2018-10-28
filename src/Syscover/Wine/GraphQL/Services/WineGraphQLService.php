<?php namespace Syscover\Wine\GraphQL\Services;

use Syscover\Core\GraphQL\Services\CoreGraphQLService;
use Syscover\Wine\Models\Wine;
use Syscover\Wine\Services\WineService;

class WineGraphQLService extends CoreGraphQLService
{
    protected $modelClassName = Wine::class;
    protected $serviceClassName = WineService::class;
}