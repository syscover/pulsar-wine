<?php namespace Syscover\Wine\Models;

use Illuminate\Support\Facades\Validator;
use Syscover\Core\Models\CoreModel;
use Syscover\Market\Models\Product;

/**
 * Class Wine
 * @package Syscover\Review\Models
 */

class Wine extends CoreModel
{
	protected $table        = 'wine_wine';
    protected $fillable     = ['name', 'year', 'is_product'];
    public $with            = ['questions'];
    private static $rules   = [
        'name' => 'required'
    ];

    public static function validate($data)
    {
        return Validator::make($data, static::$rules);
	}

    public function product()
    {
        return $this->morphOne(Product::class, 'object', 'object_type', 'object_id', 'id');
    }
}