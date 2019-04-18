<?php namespace Syscover\Wine\Models;

use Illuminate\Support\Facades\Validator;
use Syscover\Admin\Traits\Langable;
use Syscover\Core\Models\CoreModel;

/**
 * Class WineryLang
 * @package Syscover\Review\Models
 */

class WineryLang extends CoreModel
{
    use Langable;

	protected $table        = 'wine_winery_lang';
    protected $primaryKey   = 'ix';
    protected $fillable     = ['id', 'lang_id', 'excerpt', 'header', 'description', 'data'];
    public $incrementing    = false;
    protected $casts        = [
        'data'              => 'array'
    ];

    private static $rules   = [];

    public static function validate($data)
    {
        return Validator::make($data, static::$rules);
	}
}
