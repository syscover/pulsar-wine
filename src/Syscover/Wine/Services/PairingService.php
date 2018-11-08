<?php namespace Syscover\Wine\Services;

use Syscover\Wine\Models\Pairing;

class PairingService
{
    public static function create($object)
    {
        self::checkCreate($object);

        if(empty($object['id'])) $object['id'] = next_id(Pairing::class);

        $object['data_lang'] = Pairing::addDataLang($object['lang_id'], $object['id']);

        return Pairing::create(self::builder($object));
    }

    public static function update($object)
    {
        self::checkUpdate($object);
        Pairing::where('ix', $object['ix'])->update(self::builder($object, ['name', 'slug']));

        return Pairing::find($object['ix']);
    }

    private static function builder($object, $filterKeys = null)
    {
        $object = collect($object);
        if($filterKeys) return $object->only($filterKeys)->toArray();

        return  $object->only([
            'id',
            'lang_id',
            'name',
            'slug',
            'data_lang'
        ])->toArray();
    }

    private static function checkCreate($object)
    {
        if(empty($object['lang_id']))   throw new \Exception('You have to define a lang_id field to create a pairing');
        if(empty($object['name']))      throw new \Exception('You have to define a name field to create a pairing');
        if(empty($object['slug']))      throw new \Exception('You have to define a slug field to create a pairing');
    }

    private static function checkUpdate($object)
    {
        if(empty($object['ix'])) throw new \Exception('You have to define a ix field to update a pairing');
        if(empty($object['id'])) throw new \Exception('You have to define a id field to update a pairing');
    }
}