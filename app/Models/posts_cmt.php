<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class posts_cmt extends Model
{
    use HasFactory;

    protected $table = "web_cmt";

    protected $fillable = [
        'id',
        'post_id',
        'account_id',
        'cmt_id',
        'noidung',
        'updated_at',
        'created_at'
    ];

    function user(){
        return $this->belongsTo(account::class, 'account_id', 'id');
    }

    public function cmt(){
        return $this->hasMany(post::class, 'id' ,'cmt_id');
    }
}
