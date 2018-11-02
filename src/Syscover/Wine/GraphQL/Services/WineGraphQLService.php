<?php namespace Syscover\Wine\GraphQL\Services;

use Syscover\Admin\Services\AttachmentService;
use Syscover\Core\GraphQL\Services\CoreGraphQLService;
use Syscover\Core\Services\SQLService;
use Syscover\Market\Models\Product;
use Syscover\Market\Models\ProductLang;
use Syscover\Market\Services\ProductService;
use Syscover\Wine\Models\Wine;
use Syscover\Wine\Models\WineLang;
use Syscover\Wine\Services\WineService;

class WineGraphQLService extends CoreGraphQLService
{
    protected $modelClassName = Wine::class;
    protected $serviceClassName = WineService::class;

    public function create($root, array $args)
    {
        $wine = $this->service->create($args['payload']);

        if($args['payload']['is_product'])
        {
            $args['payload']['object_type']  = Wine::class;
            $args['payload']['object_id']    = $wine->id;

            ProductService::create($args['payload']);
        }

        return $wine;
    }

    public function update($root, array $args)
    {
        $wine = $this->service->update($args['payload']);

        if(isset($args['payload']['is_product']))
        {
            $args['payload']['object_type']  = Wine::class;
            $args['payload']['object_id']    = $wine->id;

            ProductService::update($args['payload']);
        }
        else
        {
            // delete product
            $product = Product::where('object_type', Wine::class)->where('object_id', $wine->id)->first();
            if($product)
            {
                SQLService::deleteRecord($product->id, Product::class, $args['payload']['lang_id'], ProductLang::class);
            }
        }

        return $this->service->update($args['payload']);
    }

    public function delete($root, array $args)
    {
        // delete object
        $wine = SQLService::deleteRecord($args['id'], $this->model, $args['lang_id'], WineLang::class);

        // delete attachments object
        AttachmentService::deleteAttachments($args['id'], $this->modelClassName, $args['lang_id']);

        // delete product
        $product = Product::where('object_type', Wine::class)->where('object_id', $wine->id)->first();
        if($product)
        {
            SQLService::deleteRecord($product->id, Product::class, $args['payload']['lang_id'], ProductLang::class);
        }

        return $wine;
    }
}