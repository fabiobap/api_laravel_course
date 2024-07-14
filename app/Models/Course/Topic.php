<?php

namespace App\Models\Course;

use App\Models\Traits\ResourceUuidKey;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Topic extends Model
{
    use HasFactory, ResourceUuidKey, SoftDeletes;

    protected $fillable = [
        'title',
        'course_id',
        'order',
    ];

    protected function casts(): array
    {
        return [
            'order' => 'integer',
            'course_id' => 'integer'
        ];
    }

    public function contents(): HasMany
    {
        return $this->hasMany(Content::class)->orderBy('order');
    }

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }
}
