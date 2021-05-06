<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Image extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $hidden = ['id', 'imageable_type', 'imageable_id','created_at','updated_at'];

    public function imageable(): MorphMany
    {
        return $this->morphTo();
    }
}
