<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Course\Content;
use App\Models\Course\Course;
use App\Models\Traits\ResourceUuidKey;
use App\Models\UserAction\Comment;
use App\Models\UserAction\Enrol;
use App\Models\UserAction\Favorite;
use App\Models\UserAction\ViewContent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, ResourceUuidKey, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function comments(): BelongsToMany
    {
        return $this->belongsToMany(
            Content::class, 'comments'
        )->using(Comment::class)
            ->withTimestamps()
            ->withPivot('resource_key', 'is_published', 'comment');
    }

    public function enrollments(): BelongsToMany
    {
        return $this->belongsToMany(
            Course::class, 'enrollments'
        )->using(Enrol::class)
            ->withTimestamps();
    }


    public function favorites(): BelongsToMany
    {
        return $this->belongsToMany(
            Content::class, 'favorites'
        )->using(Favorite::class)
            ->withTimestamps();
    }

    public function views(): BelongsToMany
    {
        return $this->belongsToMany(
            Content::class, 'view_contents'
        )->using(ViewContent::class)
            ->withTimestamps();
    }
}
