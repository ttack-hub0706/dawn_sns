<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Follow extends Model
{
    // テーブル名
    protected $table = 'follows';

    // 可変項目
    protected $fillable = [
        'follow_id',
        'follower_id'
    ];

    public function userFollowing(){
        return $this->belongsTo('App\User','follower_id');
    }
    public function userBeingFollowed(){
        return $this->belongsTo('App\User','follow_id');
    }
}
