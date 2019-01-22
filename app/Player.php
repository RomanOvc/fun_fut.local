<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{

    protected  $table = 'players';
    protected $fillable = [
        'id','username','message'
    ];

}
//$flight = Player::create(['username' => 'Flight 10','message'=>'fdghjkhgfdghjgfdgh']);
//$flight = Player::destroy(2,3,4);
