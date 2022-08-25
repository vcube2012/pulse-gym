<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

/**
 * App\Models\Club
 *
 * @property int $id
 * @property string $name
 * @property bool $new
 * @property string $address
 * @property string|null $lat
 * @property string|null $lng
 * @property mixed|null $phone
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\ClubFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Club newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Club newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Club query()
 * @method static \Illuminate\Database\Eloquent\Builder|Club whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Club whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Club whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Club whereLat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Club whereLng($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Club whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Club whereNew($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Club wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Club whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Club extends Model implements HasMedia
{
    use InteractsWithMedia ,HasSlug;

    use HasFactory;
    protected $casts = [
        'phone' => 'json',
    ];
    public function feedback(){
        return $this->hasMany(Feedback::class);
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(130)
            ->height(130);
    }


    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('main')->singleFile();
        $this->addMediaCollection('my_multi_collection');
    }

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public function getPhone()
    {
        try {
            return Arr::pluck($this->phone , 'attributes.phone');
        }catch (\Throwable $exception){
            return [];
        }
    }
}
