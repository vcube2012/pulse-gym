<?php

namespace App\Models;

use App\Service\WeekScheduleService;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Psy\Readline\Hoa\Console;
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
 * @property string $slug
 * @property string $image
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Feedback[] $feedback
 * @property-read int|null $feedback_count
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|Media[] $media
 * @property-read int|null $media_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Services[] $services
 * @property-read int|null $services_count
 * @method static \Illuminate\Database\Eloquent\Builder|Club whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Club whereSlug($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\PriceCategory[] $price
 * @property-read int|null $price_count
 */
class Club extends Model implements HasMedia
{
    use InteractsWithMedia, HasSlug;

    use HasFactory;

    protected $casts = [
        'phone' => 'json',
    ];

    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => asset(\Illuminate\Support\Facades\Storage::disk()->url($value)),
        );
    }

    public function feedback()
    {
        return $this->hasMany(Feedback::class);
    }


    public function services()
    {
        return $this->belongsToMany(Service::class);
    }


    public function schedule()
    {
        return $this->hasManyThrough(ScheduleService::class ,Schedule::class);
    }


    public function coaches()
    {
        return $this->belongsToMany(Coach::class);
    }


    public function price()
    {
        return $this->belongsToMany(PriceCategory::class);
    }


    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(348)
            ->height(200);
    }


    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('main')->singleFile();
        $this->addMediaCollection('my_multi_collection');
    }



    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public function getPhone()
    {
        try {
            return Arr::pluck($this->phone, 'attributes.phone');
        } catch (\Throwable $exception) {
            return [];
        }
    }

    public function scopeWeek(){

        $schedules=new WeekScheduleService();
        return $schedules->getSchedule($this->schedule) ;
    }

}
