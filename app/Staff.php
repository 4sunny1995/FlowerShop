<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Staff extends Model
{
    use Notifiable;
    //
    protected $fillable = [
        'id', 'name','email','phone','address','salary',
    ];
}
