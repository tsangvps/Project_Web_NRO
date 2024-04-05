<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tab_shop extends Model
{
    use HasFactory;

    protected $table = "tab_shop";
    protected $fillable = [
        'id',
        'shop_id',
        'NAME',
    ];

    // public function tab_shop(){
    //     return $this->hasMany(shop_template::class, 'shop_id');
    // }

    public function item_shop(){
        return $this->belongsTo(item_shop::class, 'id','tab_id');
    }
}
