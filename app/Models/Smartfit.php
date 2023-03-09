<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\Translatable\HasTranslations;

class Smartfit extends Model implements HasMedia
{
    use InteractsWithMedia;

//    use HasSlug;
    use HasTranslations;

    protected array $translatable = ['name','slug' ,'address', 'top_title', 'text', 'sub_title', 'description', 'features'];

    protected $casts = [
        'phone' => 'json',
    ];


    public function getImageUrlAttribute(): string
    {
        return asset(Storage::url($this->image));
    }

    public function coaches()
    {
        return $this->belongsToMany(Coach::class);
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
            ->generateSlugsFrom('title')
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

}
