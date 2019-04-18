<?php namespace Syscover\Wine\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Syscover\Admin\Models\Attachment;
use Syscover\Admin\Traits\Langable;
use Syscover\Core\Models\CoreModel;
use Syscover\Market\Traits\Marketable;

/**
 * Class Wine
 * @package Syscover\Review\Models
 */

class Wine extends CoreModel
{
    use Langable;
    use Marketable;

    protected $table        = 'wine_wine';
    protected $fillable     = ['family_id', 'type_id', 'vintage', 'winery_id', 'appellation_id', 'presentation_id', 'abv', 'country_id', 'territorial_area_1_id', 'territorial_area_2_id', 'territorial_area_3_id', 'score_average', 'parker', 'suckling', 'penin', 'decanter', 'wine_spectator', 'is_product', 'product_id', 'data_lang', 'data'];
    protected $casts        = [
        'is_product'                => 'boolean',
        'data_lang'                 => 'array',
        'data'                      => 'array'
    ];
    protected $with         = [
        'categories',
        'lang',
        'sections',
        'stocks',
        'types',
        'grapes',
        'wineries',
        'appellations',
        'presentations'
    ];
    protected $appends      = ['tax_amount', 'price'];
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
            ->join('admin_country', function($join) {
                $join->on('wine_wine.country_id', '=', 'admin_country.id')
                    ->on('wine_wine_lang.lang_id', '=', 'admin_country.lang_id');
            })
            ->leftJoin('market_product', function ($join) {
                $join->on('wine_wine.id', '=', 'market_product.object_id')
                    ->where('market_product.object_type', '=', 'Syscover\Wine\Models\Wine');
            })
            ->leftJoin('market_product_lang',  function ($join) {
                $join->on('market_product.id', '=', 'market_product_lang.id')
                    ->on('market_product_lang.lang_id', '=', 'wine_wine_lang.lang_id');
            })
            ->leftJoin('wine_appellation',  function ($join) {
                $join->on('wine_wine.appellation_id', '=', 'wine_appellation.id')
                    ->on('wine_wine_lang.lang_id', '=', 'wine_appellation.lang_id');
            })
            ->addSelect(
                'market_product.*',
                'market_product_lang.*',
                'market_product_lang.data as market_product_lang_data',
                'market_product.data as market_product_data',
                'wine_appellation.name as appellation_name',
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
     * Accessor to get fields from api request
     */
    public function getTaxAmountAttribute()
    {
        return $this->tax_amount;
    }

    public function getPriceAttribute()
    {
        return $this->price;
    }

    /**
     * Relations
     */
    public function grapes()
    {
        return $this->belongsToMany(
            Grape::class,
            'wine_wines_grapes',
            'wine_id',
            'grape_id',
            'id',
            'id'
        )
            ->as('composition')
            ->withPivot('percentage');
    }

    public function awards()
    {
        return $this->belongsToMany(
            Award::class,
            'wine_wines_awards',
            'wine_id',
            'award_id',
            'id',
            'id'
        );
    }

    public function pairings()
    {
        return $this->belongsToMany(
            Pairing::class,
            'wine_wines_pairings',
            'wine_id',
            'pairing_id',
            'id',
            'id'
        );
    }

    public function wineries()
    {
        return $this->hasMany(
            Winery::class,
            'id',
            'winery_id'
        )->builder();
    }

    public function types()
    {
        return $this->hasMany(
            Type::class,
            'id',
            'type_id'
        );
    }

    public function appellations()
    {
        return $this->hasMany(
            Appellation::class,
            'id',
            'appellation_id'
        );
    }

    public function presentations()
    {
        return $this->hasMany(
            Presentation::class,
            'id',
            'presentation_id'
        );
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
