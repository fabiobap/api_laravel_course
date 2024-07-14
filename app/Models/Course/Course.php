<?php

namespace App\Models\Course;

use App\Models\Traits\BelongsToUser;
use App\Models\User;
use App\Models\UserAction\Enrol;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Course extends Model
{
    use BelongsToUser, HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'category_id',
        'user_id',
    ];

    protected function casts(): array
    {
        return [
            'category_id' => 'integer',
            'user_id' => 'integer',
        ];
    }

    protected static function boot(): void
    {
        parent::boot();

        static::creating(function (Model $model) {
            $model->user_id = auth()->id();
            $model->resource_key = Str::uuid()->toString();
        });
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function enrollments(): BelongsToMany
    {
        return $this->belongsToMany(
            User::class, 'enrollments'
        )->using(Enrol::class)
            ->withTimestamps();
    }

    public function topics(): HasMany
    {
        return $this->hasMany(Topic::class);
    }
}
