<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Doctor;
use App\User;
class Appointment extends Model
{
    protected $fillable = [
        'date','time',
    ];

    public function user()
    {
        return $this->belongsTo('App\User','users_id');
    }

    public function doctor()
    {
        return $this->belongsTo('App\Doctor','doctors_id');
    }

}
