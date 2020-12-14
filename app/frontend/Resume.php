<?php

namespace App\frontend;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    protected $fillable = [
        'id','user_id', 'circular_id', 'photo',
    ];
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function circular()
    {
        return $this->belongsTo(circulars::class,'circular_id');
    }
}
