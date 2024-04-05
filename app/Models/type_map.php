<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class type_sell_item_shop extends Model
{
    use HasFactory;

    protected $table = "type_map";

    protected $fillable = [
        'id',
        'NAME',
    ];
}
