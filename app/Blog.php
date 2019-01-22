<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{




    protected $fillable = [
        'id','name_blog','content','photo_m','author_id'
    ];



    public function users(){

        return $this->hasMany('App\User');
    }

}
