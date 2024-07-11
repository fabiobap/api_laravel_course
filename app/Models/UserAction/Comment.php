<?php

namespace App\Models\UserAction;

use App\Models\Course\Content;
use App\Models\Traits\ResourceUuidKey;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Comment extends Pivot
{
    use HasFactory, ResourceUuidKey;

    protected $fillable = [
        'user_id',
        'content_id',
        'comment',
        'is_published'
    ];

    protected function casts(): array
    {
        return [
            'user_id' => 'integer',
            'content_id' => 'integer',
            'is_published' => 'boolean',
        ];
    }

    public function content(): BelongsTo
    {
        return $this->belongsTo(Content::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
