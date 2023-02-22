<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Spatie\Translatable\HasTranslations;

/**
 * App\Models\PriceCategory
 *
 * @property int $id
 * @property string $name
 * @property string $color
 * @property bool $new
 * @property bool $actia
 * @property string|null $comment
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Price[] $price
 * @property-read int|null $price_count
 * @method static \Database\Factories\PriceCategoryFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|PriceCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PriceCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PriceCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|PriceCategory whereActia($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PriceCategory whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PriceCategory whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PriceCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PriceCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PriceCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PriceCategory whereNew($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PriceCategory whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class PriceCategory extends Model
{
    use HasFactory;
    use HasTranslations;

    protected array $translatable = ['name', 'comment'];

    public function price(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Price::class);
    }

    public function baners()
    {
        return $this->belongsToMany(Baner::class);
    }

    public function clubs()
    {
        $this->belongsToMany(Club::class);
    }

    public function scopeOrder()
    {
        $price=$this->price()->orderBy('price', 'asc')->get();

        if(Str::contains($price->first()->name,['Единоразовый абонемент','Одноразовий абонемент','Разове тренування','Разовая тренировка']))
        {
            $singl=$price->first();
            $price->push($singl);
            $price->forget(0);
        }

        return $price;
    }
}
