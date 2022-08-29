<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

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

    protected $casts = [
        'social' => 'json'
    ];

    public function specialization(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Specialization::class);
    }

    public function coach(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Club::class);
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
