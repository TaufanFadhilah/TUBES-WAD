<?php

namespace Airy;

use Illuminate\Database\Eloquent\Model;

class Case extends Model
{
    protected $fillable = ['userId','title','desc','target','city'];
}
