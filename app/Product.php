<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Product extends Model
{
    use Notifiable;
    protected $fillable = [
        'productname',
        'productcode', 
        'image',
        'price',
        'promotionprice',
        'amount',
        'category',
        'VAT',
        'viewcount',
        'describe'
    ];
    protected $hidden=[
        'hastag'
    ];
}
