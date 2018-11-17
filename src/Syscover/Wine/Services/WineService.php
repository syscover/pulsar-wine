<?php namespace Syscover\Wine\Services;

use Syscover\Admin\Services\AttachmentService;
use Syscover\Wine\Models\Wine;
use Syscover\Wine\Models\WineLang;

class WineService
{
    public static function create($object)
    {
        self::checkCreate($object);

        // check if there is id
        if(empty($object['id']))
        {
            // create new product
            $wine = Wine::create(self::builder($object, ['family_id', 'type_id', 'vintage', 'winery_id', 'appellation_id', 'presentation_id', 'abv', 'country_id', 'territorial_area_1_id', 'territorial_area_2_id', 'territorial_area_3_id', 'score_average', 'parker', 'suckling', 'penin', 'decanter', 'wine_spectator', 'is_product', 'product_id', 'data']));
            $object['id'] = $wine->id;
        }

        // create product lang
        $wine = WineLang::create(self::builder($object, ['id', 'lang_id', 'name', 'slug', 'production', 'tasting', 'tasting_look', 'tasting_nose', 'tasting_mouth', 'tasting_temperature', 'tasting_consumption', 'vineyard', 'vineyard_name', 'vineyard_area', 'vineyard_description', 'vineyard_age', 'vineyard_soil', 'vineyard_weather', 'vineyard_performance', 'vineyard_vintage', 'vineyard_vinification', 'vineyard_aging', 'vineyard_bottling', 'data']));

        // wine already is create, it's not necessary update wine with data_lang value
        Wine::addDataLang($object['lang_id'], $object['id']);

        // get wine instance, to get every relations
        $wine = Wine::builder()
            ->where('wine_wine.id', $wine->id)
            ->where('wine_wine_lang.lang_id', $wine->lang_id)
            ->first();

        $wine->grapes()->sync(json_decode(json_encode($object['grapes_id']), true));
        $wine->awards()->sync($object['awards_id']);
        $wine->pairings()->sync($object['pairings_id']);

        // set attachments
        if(isset($object['attachments']) && is_array($object['attachments']))
        {
            // first save libraries to get id
            $attachments = AttachmentService::storeAttachmentsLibrary($object['attachments']);

            // then save attachments
            AttachmentService::storeAttachments($attachments, 'storage/app/public/wine/wines', 'storage/wine/wines', Wine::class, $wine->id, $wine->lang_id);
        }

        return $wine;
    }

    public static function update($object)
    {
        self::checkUpdate($object);
        Wine::where('id', $object['id'])->update(self::builder($object, ['family_id', 'type_id', 'vintage', 'winery_id', 'appellation_id', 'presentation_id', 'abv', 'country_id', 'territorial_area_1_id', 'territorial_area_2_id', 'territorial_area_3_id', 'score_average', 'parker', 'suckling', 'penin', 'decanter', 'wine_spectator', 'is_product', 'product_id', 'data']));

        // update wine lang
        WineLang::where('wine_wine_lang.id', $object['id'])
            ->where('wine_wine_lang.lang_id', $object['lang_id'])
            ->update(self::builder($object, ['id', 'lang_id', 'name', 'slug', 'production', 'tasting', 'tasting_look', 'tasting_nose', 'tasting_mouth', 'tasting_temperature', 'tasting_consumption', 'vineyard', 'vineyard_name', 'vineyard_area', 'vineyard_description', 'vineyard_age', 'vineyard_soil', 'vineyard_weather', 'vineyard_performance', 'vineyard_vintage', 'vineyard_vinification', 'vineyard_aging', 'vineyard_bottling', 'data']));

        // get wine instance
        $wine = Wine::builder()
            ->where('wine_wine.id', $object['id'])
            ->where('wine_wine_lang.lang_id', $object['lang_id'])
            ->first();

        $wine->grapes()->sync(json_decode(json_encode($object['grapes_id']), true));
        $wine->awards()->sync($object['awards_id']);
        $wine->pairings()->sync($object['pairings_id']);

        // set attachments
        if(isset($object['attachments']) && is_array($object['attachments']))
        {
            // first save libraries to get id
            $attachments = AttachmentService::storeAttachmentsLibrary($object['attachments']);

            // then save attachments
            AttachmentService::updateAttachments($attachments, 'storage/app/public/wine/wines', 'storage/wine/wines', Wine::class, $wine->id,  $wine->lang_id);
        }

        return $wine;
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
                'family_id',
                'type_id',
                'vintage',
                'winery_id',
                'appellation_id',
                'presentation_id',
                'abv',
                'country_id',
                'territorial_area_1_id',
                'territorial_area_2_id',
                'territorial_area_3_id',
                'score_average',
                'parker',
                'suckling',
                'penin',
                'decanter',
                'wine_spectator',
                'is_product',
                'product_id',
                'id',
                'lang_id',
                'name',
                'slug',
                'production',
                'tasting',
                'tasting_look',
                'tasting_nose',
                'tasting_mouth',
                'tasting_temperature',
                'tasting_consumption',
                'vineyard',
                'vineyard_name',
                'vineyard_area',
                'vineyard_description',
                'vineyard_age',
                'vineyard_soil',
                'vineyard_weather',
                'vineyard_performance',
                'vineyard_vintage',
                'vineyard_vinification',
                'vineyard_aging',
                'vineyard_bottling',
                'data'
            ]);
        }

        return $object->toArray();
    }

    private static function checkCreate($object)
    {
        if(empty($object['lang_id']))   throw new \Exception('You have to define a lang_id field to create a wine');
        if(empty($object['name']))      throw new \Exception('You have to define a name field to create a wine');
        if(empty($object['slug']))      throw new \Exception('You have to define a slug field to create a wine');
    }

    private static function checkUpdate($object)
    {
        if(empty($object['id']))        throw new \Exception('You have to define a id field to update a wine');
        if(empty($object['lang_id']))   throw new \Exception('You have to define a lang_id field to update a wine');
    }
}