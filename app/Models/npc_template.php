<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\shop_template;

class npc_template extends Model
{
    use HasFactory;

    protected $table = "npc_template";
    protected $fillable = [
        'id',
        'NAME',
        'head',
        'body',
        'leg',
        'avatar',
    ];

    public function shop_template(){
        return $this->belongsTo(shop_template::class, 'id','npc_id');
    }
}
