<?php

namespace App\Models\Course\Quiz;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class Answer extends Pivot
{
    use HasFactory, SoftDeletes;

    protected $table = 'answers';

    protected $fillable = [
        'alternative_id',
        'question_id',
        'user_id',
    ];

    protected function casts(): array
    {
        return [
            'alternative_id' => 'integer',
            'question_id' => 'integer',
            'user_id' => 'integer',
        ];
    }

    public function alternative(): BelongsTo
    {
        return $this->belongsTo(Alternative::class);
    }

    public function question(): BelongsTo
    {
        return $this->belongsTo(Question::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
