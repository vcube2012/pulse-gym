<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class ScheduleService extends Model implements Sortable
{
    use HasFactory;
    use SortableTrait;

    public $sortable = [
        'order_column_name' => 'sort',
        'sort_when_creating' => true,
        'sort_on_has_many' => true,
    ];
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
    public function schedule()
    {
        return $this->belongsTo(Schedule::class);
    }

}
