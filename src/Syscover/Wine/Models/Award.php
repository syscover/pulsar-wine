<?php namespace Syscover\Wine\Models;

use Syscover\Core\Models\CoreModel;
use Illuminate\Support\Facades\Validator;
use Syscover\Admin\Traits\Translatable;

/**
 * Class Award
 * @package Syscover\Wine\Models
 */

class Award extends CoreModel
{
    use Translatable;

	protected $table        = 'wine_award';
    protected $primaryKey   = 'ix';
    protected $fillable     = ['ix', 'id' ,'lang_id', 'name', 'slug', 'data_lang'];
    protected $casts        = [
        'data_lang' => 'array'
    ];
    public $with            = ['lang'];

    private static $rules   = [];

    public static function validate($data)
    {
        return Validator::make($data, static::$rules);
	}
}