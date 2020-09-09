<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticatable
{
    protected $table = 'admins';
    protected $guarded =[];      // instead of $fillable
    public $timestamps = true;
}
