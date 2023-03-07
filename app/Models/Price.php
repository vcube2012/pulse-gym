<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

/**
 * App\Models\Price
 *
 * @property int $id
 * @property int $price_category_id
 * @property string $name
 * @property string $price
 * @property bool $month
 * @property string|null $comment
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\PriceFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Price newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Price newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Price query()
 * @method static \Illuminate\Database\Eloquent\Builder|Price whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Price whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Price whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Price whereMonth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Price whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Price wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Price wherePriceCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Price whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Price extends Model
{
    use HasFactory;
    use HasTranslations;

    protected array $translatable= ['name', 'comment'];

    public function priceCategory()
    {
        return $this->belongsTo(PriceCategory::class);
    }
    public function parent()
    {
        return $this->priceCategory();
    }
    public function getPriceValueAttribute()
    {
        if($this->month){
            return $this->price.' за абонемент в месяц';
        }
        return $this->price;
    }
}
