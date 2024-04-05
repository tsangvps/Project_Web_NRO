<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class type_sell_item_shop extends Model
{
    use HasFactory;

    protected $table = "type_sell_item_shop";

    protected $fillable = [
        'id',
        'NAME',
    ];

    public function type_sell(){
        return $this->hasMany(item_shop::class, 'id');
    }
}
