<?php

namespace App\Models\Course;

use App\Models\Traits\ResourceUuidKey;
use App\Models\User;
use App\Models\UserAction\Comment;
use App\Models\UserAction\Enrol;
use App\Models\UserAction\Favorite;
use App\Models\UserAction\ViewContent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Content extends Model
{
    use HasFactory, ResourceUuidKey, SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'order',
        'contentable_id',
        'contentable_type',
        'topic_id',
        'is_published',
    ];

    protected function casts(): array
    {
        return [
            'topic_id' => 'integer',
            'contentable_id' => 'integer',
            'order' => 'integer',
            'is_published' => 'boolean',
        ];
    }

    public function courses(): BelongsTo
    {
        return $this->belongsTo(Topic::class);
    }

    public function contentable(): MorphTo
    {
        return $this->morphTo();
    }

    public function comments(): BelongsToMany
    {
        return $this->belongsToMany(
            User::class, 'comments'
        )->using(Comment::class)
            ->withTimestamps()
            ->withPivot('resource_key', 'is_published', 'comment');
    }

    public function favorites(): BelongsToMany
    {
        return $this->belongsToMany(
            User::class, 'favorites'
        )->using(Favorite::class)
            ->withTimestamps();
    }

    public function views(): BelongsToMany
    {
        return $this->belongsToMany(
            User::class, 'view_contents'
        )->using(ViewContent::class)
            ->withTimestamps();
    }
}
