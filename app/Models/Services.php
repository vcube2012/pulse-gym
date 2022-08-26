<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Services
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\ServicesFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Services newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Services newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Services query()
 * @method static \Illuminate\Database\Eloquent\Builder|Services whereClubId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Services whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Services whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Services whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Services whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read int|null $clubs_count
 */
class Services extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function clubs(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Club::class);
    }
}
