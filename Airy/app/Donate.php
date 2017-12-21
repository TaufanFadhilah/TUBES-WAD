<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donate extends Model
{
    protected $fillable = ['userId',' caseId', 'price', 'note', 'photo'];
}
