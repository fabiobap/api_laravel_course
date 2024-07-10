<?php

namespace App\Models\Course\Quiz;

use App\Models\Course\Content;
use App\Models\Traits\ResourceUuidKey;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question extends Model
{
    use HasFactory, ResourceUuidKey, SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'quiz_id',
        'order'
    ];

    protected function casts(): array
    {
        return [
            'quiz_id' => 'integer',
            'order' => 'integer',
        ];
    }

    public function content(): MorphOne
    {
        return $this->morphOne(Content::class, 'contentable');
    }

    public function quiz(): BelongsTo
    {
        return $this->belongsTo(Quiz::class);
    }
}
