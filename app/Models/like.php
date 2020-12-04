<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;
    protected $table = 'likes';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;

    protected $with = ['user'];
    
    public function user() 
    {
        return $this->belongsTo('App\Models\User', 'ref_user_id');
    }
    public function post() 
    {
        return $this->belongsTo('App\Models\Posts', 'ref_post_id');
    }
    //
}