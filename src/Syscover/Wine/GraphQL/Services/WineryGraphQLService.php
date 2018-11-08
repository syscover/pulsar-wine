<?php namespace Syscover\Wine\GraphQL\Services;

use Syscover\Admin\Services\AttachmentService;
use Syscover\Core\GraphQL\Services\CoreGraphQLService;
use Syscover\Core\Services\SQLService;
use Syscover\Wine\Models\Winery;
use Syscover\Wine\Models\WineryLang;
use Syscover\Wine\Services\WineryService;

class WineryGraphQLService extends CoreGraphQLService
{
    protected $modelClassName = Winery::class;
    protected $serviceClassName = WineryService::class;

    public function delete($root, array $args)
    {
        // delete object
        $wine = SQLService::deleteRecord($args['id'], $this->modelClassName, $args['lang_id'], WineryLang::class);

        // delete attachments object
        AttachmentService::deleteAttachments($args['id'], $this->modelClassName, $args['lang_id']);

        return $wine;
    }
}