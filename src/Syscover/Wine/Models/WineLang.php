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
    protected $fillable     = ['id', 'lang_id', 'name', 'slug', 'year', 'is_product', 'tasting_note', 'data'];
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