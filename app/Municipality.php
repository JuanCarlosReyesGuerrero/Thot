<?php

namespace Thot;

use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    protected $fillable = [
        'code','name','unifiedcode','department_id','department_code','active',
    ];    
}
