<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Car extends Model
{
    use HasFactory;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->groups = [
            'Most Popular',
            'Latest',
            'LCGC',
            'SUV',
            'Sedan',
            'MVP',
            'City Car'
        ];
    }

    public function scopeFindByGroup($query, $group = '')
    {

        if (empty($group) || ((int)$group > count($this->groups) - 1) || !is_numeric($group)) {
            return $query;
        }


        if (trim($group) == '0') {
            return $query->where('popularity', '>=', 93)->orderBy('popularity', 'desc');
        }

        if (trim($group) == '1') {
            return $query->orderBy('built_year');
        }

        return $query->where('group', $this->groups[$group]);
    }

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    public function images(): MorphMany
    {
        return $this->morphMany('App\Models\Image', 'imageable');
    }


}
