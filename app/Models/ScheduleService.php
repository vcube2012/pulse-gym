<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScheduleService extends Model
{
    use HasFactory;

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
    public function schedule()
    {
        return $this->belongsTo(Schedule::class);
    }

}
