<?php namespace Syscover\Wine\GraphQL\Services;

use Syscover\Core\GraphQL\Services\CoreGraphQLService;
use Syscover\Market\Services\ProductService;
use Syscover\Wine\Models\Wine;
use Syscover\Wine\Services\WineService;

class WineGraphQLService extends CoreGraphQLService
{
    protected $modelClassName = Wine::class;
    protected $serviceClassName = WineService::class;

    public function create($root, array $args)
    {
        $wine = $this->service->create($args['payload']);

        if(isset($args['payload']['product']))
        {
            $args['payload']['product']['object_type']  = Wine::class;
            $args['payload']['product']['object_id']    = $wine->id;

            ProductService::create($args['payload']['product']);
        }

        return $wine;
    }
}