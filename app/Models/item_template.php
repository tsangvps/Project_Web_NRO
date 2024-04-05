<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class item_template extends Model
{
    use HasFactory;

    protected $table = "item_template";

    protected $fillable = [
        'id',
        'type',
        'gender',
        'NAME',
        'description',
        'icon_id',
        'part',
        'power_require',
        'is_up_to_up',
        'gold',
        'gem',
        'head',
        'body',
        'leg',
    ];

    public function item(){
        return $this->hasMany(item_shop::class, 'id');
    }
    
}
