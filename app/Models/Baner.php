<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Baner extends Model
{
    use HasFactory;
    use HasTranslations;
    protected array $translatable = ['title', 'sub_title'];
    public function priceCategory()
    {
        return $this->hasMany(PriceCategory::class);
    }
}
