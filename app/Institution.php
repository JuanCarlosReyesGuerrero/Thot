<?php

namespace Thot;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    protected $fillable = [
        'daneCode','name','nit','rectorName','calendar_id',
    ];   
}
