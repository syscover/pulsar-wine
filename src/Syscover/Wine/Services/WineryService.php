<?php namespace Syscover\Wine\Services;

use Syscover\Admin\Services\AttachmentService;
use Syscover\Wine\Models\Winery;
use Syscover\Wine\Models\WineryLang;

class WineryService
{
    public static function create($object)
    {
        self::checkCreate($object);

        // check if there is id
        if(empty($object['id']))
        {
            // create new product
            $winery = Winery::create(self::builder($object, ['name', 'slug', 'country_id']));
            $object['id'] = $winery->id;
        }

        // create product lang
        $winery = WineryLang::create(self::builder($object, ['id', 'lang_id', 'excerpt', 'header', 'description', 'data']));

        // winery already is create, it's not necessary update winery with data_lang value
        Winery::getDataLang($object['lang_id'], $object['id']);

        // get winery instance, to get every relations
        $winery = Winery::builder()
            ->where('wine_winery.id', $winery->id)
            ->where('wine_winery_lang.lang_id', $winery->lang_id)
            ->first();

        // set attachments
        if(isset($object['attachments']) && is_array($object['attachments']))
        {
            // first save libraries to get id
            $attachments = AttachmentService::storeAttachmentsLibrary($object['attachments']);

            // then save attachments
            AttachmentService::storeAttachments($attachments, 'storage/app/public/wine/wineries', 'storage/wine/wineries', Winery::class, $winery->id, $winery->lang_id);
        }

        return $winery;
    }

    public static function update($object)
    {
        self::checkUpdate($object);
        Winery::where('id', $object['id'])->update(self::builder($object, ['name', 'slug', 'country_id']));

        // update winery lang
        WineryLang::where('wine_winery_lang.id', $object['id'])
            ->where('wine_winery_lang.lang_id', $object['lang_id'])
            ->update(self::builder($object, ['lang_id', 'excerpt', 'header', 'description', 'data']));

        // get winery instance
        $winery = Winery::builder()
            ->where('wine_winery.id', $object['id'])
            ->where('wine_winery_lang.lang_id', $object['lang_id'])
            ->first();

        // set attachments
        if(isset($object['attachments']) && is_array($object['attachments']))
        {
            // first save libraries to get id
            $attachments = AttachmentService::storeAttachmentsLibrary($object['attachments']);

            // then save attachments
            AttachmentService::updateAttachments($attachments, 'storage/app/public/wine/wineries', 'storage/wine/wineries', Winery::class, $winery->id,  $winery->lang_id);
        }

        return $winery;
    }

    private static function builder($object, $filterKeys = null)
    {

        $object = collect($object);
        if($filterKeys)
        {
            $object = $object->only($filterKeys);
        }
        else
        {
            $object = $object->only([
                'id',
                'name',
                'slug',
                'country_id',
                'excerpt',
                'header',
                'description',
                'data'
            ]);
        }

        return $object->toArray();
    }

    private static function checkCreate($object)
    {
        if(empty($object['lang_id']))       throw new \Exception('You have to define a lang_id field to create a winery');
        if(empty($object['name']))          throw new \Exception('You have to define a name field to create a winery');
        if(empty($object['slug']))          throw new \Exception('You have to define a slug field to create a winery');
        if(empty($object['country_id']))    throw new \Exception('You have to define a country_id field to create a winery');
    }

    private static function checkUpdate($object)
    {
        if(empty($object['id']))        throw new \Exception('You have to define a id field to update a winery');
        if(empty($object['lang_id']))   throw new \Exception('You have to define a lang_id field to update a winery');
    }
}
