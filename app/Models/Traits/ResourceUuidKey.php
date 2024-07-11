<?php

namespace App\Models\Traits;

use Illuminate\Database\Eloquent\Concerns\HasUuids;

trait ResourceUuidKey
{
    use HasUuids;

    public function newUniqueId(): array
    {
        return ['resource_key'];
    }
}
