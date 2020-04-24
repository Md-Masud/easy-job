<?php

namespace App\frontend;

use Illuminate\Database\Eloquent\Model;
use App\backend\categorys;
use Illuminate\Support\Facades\Auth;
class circulars extends Model
{
    protected $fillable = [
      'id', 'category_id','user_id', 'name', 'slug','description','education','vacancies','experience','additional','location','salary',
    ];
   public function categorys()
    {
        return $this->belongsTo(categorys::class,'category_id');
    }
   //public function users()
    //{
        //return $this->hasMany(users::class,'user_id');
    //}
}
