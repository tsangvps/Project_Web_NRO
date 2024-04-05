<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\tab_shop;

class shop_template extends Model
{
    use HasFactory;
    
    protected $table = "shop";
    protected $fillable = [
        'id',
        'npc_id',
        'tag_name',
        'type_shop',
    ];

    // public function npc_template(){
    //     return $this->hasMany(npc_template::class);
    // }

    public function tab_shop(){
        return $this->belongsTo(tab_shop::class, 'id' ,'shop_id');
    }

    
}
