<?php namespace Syscover\Wine\GraphQL\Services;

use Syscover\Admin\Services\AttachmentService;
use Syscover\Core\GraphQL\Services\CoreGraphQLService;
use Syscover\Core\Services\SQLService;
use Syscover\Market\Models\Product;
use Syscover\Market\Models\ProductLang;
use Syscover\Market\Services\MarketableService;
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
            $args['payload']['object_type']  = $this->modelClassName;
            $args['payload']['object_id']    = $wine->id;

            MarketableService::create($args['payload'], $wine);
        }

        return $wine;
    }

    public function update($root, array $args)
    {
        $wine = $this->service->update($args['payload']);

        if($args['payload']['is_product'])
        {
            $product = Product::where('object_type', $this->modelClassName)->where('object_id', $wine->id)->first();

            $args['payload']['object_type']  = $this->modelClassName;
            $args['payload']['object_id']    = $wine->id;
            if($product)
            {
                // update product
                MarketableService::update($args['payload']);
            }
            else
            {
                // create product
                MarketableService::create($args['payload'], $wine);
            }
        }
        else
        {
            // delete product
            $product = Product::where('object_type', $this->modelClassName)->where('object_id', $wine->id)->first();
            if($product)
            {
                // if there are any product, delete all products from all langs, set base_lang to delete all langs
                SQLService::deleteRecord($product->id, Product::class, base_lang(), ProductLang::class);
            }
        }

        return $wine;
    }

    public function delete($root, array $args)
    {
        // delete object
        $wine = SQLService::deleteRecord($args['id'], $this->modelClassName, $args['lang_id'], WineLang::class);

        // delete attachments object
        AttachmentService::deleteAttachments($args['id'], $this->modelClassName, $args['lang_id']);

        // delete product
        $product = Product::where('object_type', $this->modelClassName)->where('object_id', $wine->id)->first();
        if($product)
        {
            SQLService::deleteRecord($product->id, Product::class, $args['lang_id'], ProductLang::class);
        }

        return $wine;
    }
}