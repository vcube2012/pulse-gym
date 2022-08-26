<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\Feedback
 *
 * @property int $id
 * @property int $club_id
 * @property string $name
 * @property string $email
 * @property string $feedback
 * @property string|null $answer
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\FeedbackFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback query()
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback whereAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback whereClubId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback whereFeedback($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property bool $active
 * @property-read \App\Models\Club $club
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback whereActive($value)
 */
class Feedback extends Model
{
    use HasFactory;
    protected $with = ['club'];
    protected $fillable = ['name', 'club_id', 'email', 'feedback', 'answer'];

    public function club(): BelongsTo
    {
        return $this->belongsTo(Club::class);
    }
}
