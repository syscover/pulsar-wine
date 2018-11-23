<?php namespace Syscover\Wine\Models;

use Illuminate\Support\Facades\Validator;
use Syscover\Admin\Traits\Translatable;
use Syscover\Core\Models\CoreModel;

/**
 * Class WineLang
 * @package Syscover\Review\Models
 */

class WineLang extends CoreModel
{
    use Translatable;

	protected $table        = 'wine_wine_lang';
    protected $primaryKey   = 'ix';
    protected $fillable     = ['id', 'lang_id', 'name', 'slug', 'description', 'production', 'tasting', 'tasting_look', 'tasting_nose', 'tasting_mouth', 'tasting_temperature', 'tasting_consumption', 'vineyard', 'vineyard_name', 'vineyard_area', 'vineyard_description', 'vineyard_age', 'vineyard_soil', 'vineyard_weather', 'vineyard_performance', 'vineyard_vintage', 'vineyard_vinification', 'vineyard_aging', 'vineyard_bottling', 'data'];
    public $incrementing    = false;
    protected $casts        = [
        'data' => 'array'
    ];

    private static $rules   = [];

    public static function validate($data)
    {
        return Validator::make($data, static::$rules);
	}
}