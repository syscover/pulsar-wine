<?php namespace Syscover\Wine\GraphQL\Services;

use Syscover\Admin\Services\AttachmentService;
use Syscover\Core\GraphQL\Services\CoreGraphQLService;
use Syscover\Core\Services\SQLService;
use Syscover\Wine\Models\Winery;
use Syscover\Wine\Models\WineryLang;
use Syscover\Wine\Services\WineryService;

class WineryGraphQLService extends CoreGraphQLService
{
    public function __construct(Winery $model, WineryService $service)
    {
        $this->model = $model;
        $this->service = $service;
    }

    public function delete($root, array $args)
    {
        // delete object
        $wine = SQLService::deleteRecord($args['id'], get_class($this->model), $args['lang_id'], WineryLang::class);

        // delete attachments object
        AttachmentService::deleteAttachments($args['id'], get_class($this->model), $args['lang_id']);

        return $wine;
    }
}
