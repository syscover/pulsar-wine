<?php namespace Syscover\Wine\Models;

use Syscover\Core\Models\CoreModel;
use Illuminate\Support\Facades\Validator;
use Syscover\Admin\Traits\Langable;

/**
 * Class Pairing
 * @package Syscover\Wine\Models
 */

class Pairing extends CoreModel
{
    use Langable;

	protected $table        = 'wine_pairing';
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
