<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Trip extends Model
{
    use HasFactory;
    protected $primaryKey = 'trip_id';
    protected $guarded = [];
    protected $hidden = ['created_at', 'updated_at', 'trip_id'];

    function scopeByUserId($query, $userId){
        if(!$userId) return $query;
        return $query->where('user_id', $userId);
    }

    public function images(): MorphMany
    {
        return $this->morphMany('App\Models\Image', 'imageable');
    }
}
