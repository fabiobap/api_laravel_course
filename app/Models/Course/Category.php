<?php

namespace App\Models\Course;

use App\Models\Traits\ResourceUuidKey;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, ResourceUuidKey, SoftDeletes;

    protected $fillable = [
        'name',
    ];

    public function courses(): HasMany
    {
        return $this->hasMany(Course::class);
    }
}
