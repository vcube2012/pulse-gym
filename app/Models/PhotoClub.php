<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\PhotoClub
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\PhotoClubFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|PhotoClub newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PhotoClub newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PhotoClub query()
 * @method static \Illuminate\Database\Eloquent\Builder|PhotoClub whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhotoClub whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhotoClub whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class PhotoClub extends Model
{
    use HasFactory;
}
