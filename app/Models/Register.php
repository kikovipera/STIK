<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    //

    protected $table = 'register';

    protected $fillable = ['first_name', 'last_name', 'phone','date_birth'];


}
