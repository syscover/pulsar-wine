<?php namespace Syscover\Wine\GraphQL\Services;

use Syscover\Core\GraphQL\Services\CoreGraphQLService;
use Syscover\Wine\Models\Family;
use Syscover\Wine\Services\FamilyService;

class FamilyGraphQLService extends CoreGraphQLService
{
    protected $modelClassName = Family::class;
    protected $serviceClassName = FamilyService::class;
}