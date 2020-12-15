<?php

namespace App\frontend;

use Illuminate\Database\Eloquent\Model;

class SelectResume extends Model
{
    protected $fillable = [
        'id','owner_id', 'resume_id',
    ];
    public function owner()
    {
        return $this->belongsTo(Owner::class,'owner_id');
    }
    public function resume()
    {
        return $this->belongsTo(Resume::class,'resume_id');
    }
}
