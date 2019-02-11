<?php namespace Syscover\Wine\GraphQL\Services;

use Syscover\Core\GraphQL\Services\CoreGraphQLService;
use Syscover\Wine\Models\Appellation;
use Syscover\Wine\Services\AppellationService;

class AppellationGraphQLService extends CoreGraphQLService
{
    protected $model = Appellation::class;
    protected $service = AppellationService::class;
}
