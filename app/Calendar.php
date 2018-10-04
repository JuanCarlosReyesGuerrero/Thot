<?php

namespace Thot;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    protected $fillable = [
        'code','name','active',
    ];
}
