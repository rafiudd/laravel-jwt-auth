<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Emadadly\LaravelUuid\Uuids;

class Material extends Model
{
    use Uuids;
    protected $fillable = [
        'thumbnail', 'title', 'content',
    ];
}
