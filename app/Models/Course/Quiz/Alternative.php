<?php

namespace App\Models\Course\Quiz;

use App\Models\Course\Content;
use App\Models\Traits\ResourceUuidKey;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Alternative extends Model
{
    use HasFactory, ResourceUuidKey, SoftDeletes;

    protected $fillable = [
        'title',
        'question_id',
        'order',
        'is_correct'
    ];

    protected function casts(): array
    {
        return [
            'question_id' => 'integer',
            'order' => 'integer',
            'is_correct' => 'boolean'
        ];
    }

    public function content(): MorphOne
    {
        return $this->morphOne(Content::class, 'contentable');
    }

    public function question(): BelongsTo
    {
        return $this->belongsTo(Question::class);
    }
}
