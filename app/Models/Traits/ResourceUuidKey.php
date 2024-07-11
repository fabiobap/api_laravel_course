<?php

namespace App\Models\Traits;

use Illuminate\Support\Str;

trait ResourceUuidKey
{
    protected static function boot(): void
    {
        parent::boot();

        static::creating(function ($model) {
            $model->resource_key = Str::uuid()->toString();
        });
    }
}
