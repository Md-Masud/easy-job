<?php

namespace App\frontend;

use Illuminate\Database\Eloquent\Model;
use App\backend\countrys;
class ownerinformations extends Model
{
     protected $fillable = [
      'id', 'counrty_id','user_id', 'name', 'slug','description','education','web_address','facebook',
    ];

    public function countrys()
    {
        return $this->belongsTo(countrys::class,'counrty_id');
    }

}

