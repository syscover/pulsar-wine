<?php namespace Syscover\Wine\GraphQL\Services;

use Syscover\Core\GraphQL\Services\CoreGraphQLService;
use Syscover\Wine\Models\Award;
use Syscover\Wine\Services\AwardService;

class AwardGraphQLService extends CoreGraphQLService
{
    protected $modelClassName = Award::class;
    protected $serviceClassName = AwardService::class;
}