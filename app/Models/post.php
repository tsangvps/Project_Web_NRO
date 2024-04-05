<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;

    protected $table = "web_posts";

    protected $fillable = [
        'id',
        'account_id',
        'title',
        'status',
        'body',
        'image',
        'updated_at',
        'created_at'
    ];

    function cmt(){
        return $this->belongsTo(posts_cmt::class, 'id' ,'post_id');
    }

    function user(){
        return $this->belongsTo(account::class, 'account_id', 'id');
    }
}
