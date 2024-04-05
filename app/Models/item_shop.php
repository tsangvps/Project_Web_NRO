<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class item_shop extends Model
{
    use HasFactory;

    protected $table = "item_shop";

    protected $fillable = [
        'id',
        'tab_id',
        'temp_id',
        'is_new',
        'type_sell',
        'is_sell',
        'cost',
        'icon_spec',
    ];
    
    public function item(){
        return $this->belongsTo(item_template::class, 'temp_id' ,'id');
    }

    public function type_sell(){
        return $this->belongsTo(type_sell_item_shop::class, 'type_sell' ,'id');
    }
}
