<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    public function writer(){
        return $this->belongsTo(Writer::class);
    }

    public function scopeFilterByType($query, $type=''){
        if(empty($type)) return $query;

        return $query->where('type', $type);
    }
}
