<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Promo extends Model
{
    use HasFactory;

    public function scopeGetImages()
    {
        $mas=json_decode($this->images);
        $images=[];
        foreach ($mas as $img)
        {
            $images[]= asset(Storage::url($img->attributes->image));
        }
        return $images;
    }
}
