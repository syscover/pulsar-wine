<?php namespace Syscover\Wine\GraphQL\Services;

use Syscover\Core\GraphQL\Services\CoreGraphQLService;
use Syscover\Wine\Models\Type;
use Syscover\Wine\Services\TypeService;

class TypeGraphQLService extends CoreGraphQLService
{
    protected $model = Type::class;
    protected $service = TypeService::class;
}
