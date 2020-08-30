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

}
