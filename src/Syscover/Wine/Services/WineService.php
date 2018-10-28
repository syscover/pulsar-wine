<?php namespace Syscover\Wine\Services;

use Syscover\Wine\Models\Wine;

class WineService
{
    public static function create($object)
    {
        self::checkCreate($object);
        return Wine::create($object);
    }

    public static function update($object)
    {
        self::checkUpdate($object);
        Wine::where('id', $object['id'])->update(self::builder($object));
        return Wine::find($object['id']);
    }

    private static function builder($object)
    {
        $object = collect($object);
        return $object->only([
            'name',
            'year',
            'is_product'
        ])->toArray();
    }

    private static function checkCreate($object)
    {
        if(empty($object['name'])) throw new \Exception('You have to define a name field to create a wine');
    }

    private static function checkUpdate($object)
    {
        if(empty($object['id'])) throw new \Exception('You have to define a id field to update a wine');
    }
}