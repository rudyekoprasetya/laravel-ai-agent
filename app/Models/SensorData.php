<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SensorData extends Model
{
    //
    use HasFactory;

    protected $fillabel = [
        'device_id',
        'sensor_data'
    ];

    public function devices()
    {
        return $this->belongsTo(Device::class);
    }
}
