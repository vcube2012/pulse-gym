<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Seo extends Model
{
    use HasFactory;
    use HasTranslations;
    protected $fillable = ['meta_title', 'meta_description'];
    public array $translatable = ['meta_title', 'meta_description'];
    public function seoeable()
    {
        return $this->morphTo();
    }

}
