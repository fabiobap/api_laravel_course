<?php

namespace App\Models\Course\Content;

use App\Models\Course\Content;
use App\Models\Traits\ResourceUuidKey;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class VideoContent extends Model
{
    use HasFactory, ResourceUuidKey, SoftDeletes;

    protected $fillable = [
        'youtube_id',
        'metadata',
    ];

    protected function casts(): array
    {
        return [
            'metadata' => 'array',
        ];
    }

    public function content(): MorphOne
    {
        return $this->morphOne(Content::class, 'contentable');
    }
}
