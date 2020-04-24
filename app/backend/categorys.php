<?php

namespace App\backend;

use Illuminate\Database\Eloquent\Model;
use App\frontend\circulars;
use App\frontend\ownerinformations;

class categorys extends Model
{
    protected $fillable = [
       'id' ,'name', 
    ];
    public function ownerinformations()
    {
        return $this->hasMany('App\frontend\ownerinformations');
    }
    public function circulars ()
    {
        return $this->hasMany('App\frontend\circulars');
    }
     public function users ()
    {
        return $this->hasMany('App\users');
    }
    
}
