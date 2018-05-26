<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\student;
class verify_student extends Model
{
    public function student()
    {

      return  $this->belongsTo('App\student');
    }
}
