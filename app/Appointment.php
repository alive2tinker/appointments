<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'branch',
        'date',
        'time'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
