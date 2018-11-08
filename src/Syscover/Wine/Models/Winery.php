<?php namespace Syscover\Wine\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Syscover\Admin\Models\Attachment;
use Syscover\Admin\Traits\Translatable;
use Syscover\Core\Models\CoreModel;

/**
 * Class Winery
 * @package Syscover\Review\Models
 */

class Winery extends CoreModel
{
    use Translatable;

	protected $table        = 'wine_winery';
    protected $fillable     = ['name', 'slug', 'country_id', 'data_lang'];
    protected $casts        = [
        'data_lang'         => 'array'
    ];
    protected $with         = [

    ];

    private static $rules   = [
        'name' => 'required'
    ];

    public static function validate($data)
    {
        return Validator::make($data, static::$rules);
	}

    public function scopeBuilder($query)
    {
        return $query
            ->join('wine_winery_lang', 'wine_winery.id', '=', 'wine_winery_lang.id')
            ->addSelect(
                'wine_winery.*',
                'wine_winery_lang.*'
            );
    }

    public function scopeCalculateFoundRows($query)
    {
        return $query->select(DB::raw('SQL_CALC_FOUND_ROWS wine_winery.id'));
    }

    /**
     * Is not possible add 'attachments' to $with parameter, it need to be instantiated to get lang parameter
     * It's possible pass lang parameter with this method
     *
     * Product::with(['attachments' => function ($q) use ($langId) {
     *   $q->where('admin_attachment.lang_id', $langId);
     * }])->get();
     */
    public function attachments()
    {
        return $this->morphMany(
            Attachment::class,
            'object',
            'object_type',
            'object_id',
            'id'
        )
            ->where('admin_attachment.lang_id', $this->lang_id ? $this->lang_id : user_lang())
            ->orderBy('sort', 'asc');
    }
}