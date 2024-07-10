<?php

namespace App\Models\UserAction;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Enrol extends Pivot
{
    use HasFactory;

    protected $table = 'enrollment';

}
