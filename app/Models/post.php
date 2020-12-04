<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;

    protected $with = ['user', 'likes'];

    public function user() 
    {
        return $this->belongsTo('App\Models\User', 'ref_user_id');
    }
    public function likes() 
    {
        return $this->hasMany('App\Models\Like', 'ref_post_id', 'id');            
    }
}