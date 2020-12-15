<?php

namespace App\frontend;

use Illuminate\Database\Eloquent\Model;
use App\backend\categorys;
use Illuminate\Support\Facades\Auth;
class circulars extends Model
{
    protected $fillable = [
      'id', 'category_id','owner_id', 'name', 'slug','description','education','vacancies','experience','additional','location','salary','dateline',
    ];
    protected $date = ['dateline'];
   public function categorys()
    {
        return $this->belongsTo(categorys::class,'category_id');
    }
   public function owner()
    {
        return $this->belongsTo(Owner::class,'owner_id');
    }
    public function resumes ()
    {
        return $this->hasMany(Resume::class,'circular_id');
    }
}
