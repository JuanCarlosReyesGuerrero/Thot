<?php

namespace Thot;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
        'code', 'name', 'active',
    ];
}