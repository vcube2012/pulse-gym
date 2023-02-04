<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\Translatable\HasTranslations;

/**
 * App\Models\Coach
 *
 * @property int $id
 * @property string $name
 * @property string|null $title
 * @property string $image
 * @property string $description
 * @property string|null $phone
 * @property string|null $social
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\CoachFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Coach newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Coach newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Coach query()
 * @method static \Illuminate\Database\Eloquent\Builder|Coach whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coach whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coach whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coach whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coach whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coach wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coach whereSocial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coach whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coach whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Coach extends Model
{
    use HasFactory;
    use HasSlug;
    use HasTranslations;
    protected $casts = [
        'social' => 'json'
    ];
    protected array $translatable = ['name', 'title', 'description'];

    public function getImageUrlAttribute():string
    {
        return  asset(Storage::url($this->image));
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public function specialization(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Specialization::class);
    }

    public function coach(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Club::class);
    }
    public function smartfit(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Smartfit::class);
    }
    public function getSocial()
    {
        try {
            return Arr::pluck($this->social, 'attributes');
        } catch (\Throwable $exception) {
            return [];
        }
    }
}
