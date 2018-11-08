<?php namespace Syscover\Wine\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Syscover\Admin\Models\Attachment;
use Syscover\Admin\Traits\Translatable;
use Syscover\Core\Models\CoreModel;
use Syscover\Market\Traits\Marketable;

/**
 * Class Wine
 * @package Syscover\Review\Models
 */

class Wine extends CoreModel
{
    use Translatable;
    use Marketable;

	protected $table        = 'wine_wine';
    protected $fillable     = ['year', 'is_product', 'product_id', 'data_lang', 'data'];
    protected $casts        = [
        'is_product'                => 'boolean',
        'data_lang'                 => 'array',
        'data'                      => 'array'
    ];
    protected $with         = [
        'categories',
        'lang',
        'sections',
        'stocks'
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
            ->join('wine_wine_lang', 'wine_wine.id', '=', 'wine_wine_lang.id')
            ->leftJoin('market_product', function ($join) {
                $join->on('wine_wine.id', '=', 'market_product.object_id')
                    ->where('market_product.object_type', '=', 'Syscover\Wine\Models\Wine');
            })
            ->leftJoin('market_product_lang',  function ($join) {
                $join->on('market_product.id', '=', 'market_product_lang.id')
                    ->on('market_product_lang.lang_id', '=', 'wine_wine_lang.lang_id');
            })
            ->addSelect(
                'market_product.*',
                'market_product_lang.*',
                'market_product_lang.data as market_product_lang_data',
                'market_product.data as market_product_data',
                'wine_wine.*',
                'wine_wine_lang.*',
                'wine_wine_lang.data as wine_wine_lang_data',
                'wine_wine.data as wine_wine_data'
            );
    }

    public function scopeCalculateFoundRows($query)
    {
        return $query->select(DB::raw('SQL_CALC_FOUND_ROWS wine_wine.id'));
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