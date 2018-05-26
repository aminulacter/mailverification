<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\verify_student;
class student extends Model
{
  public function verify__student()
  {
      return $this->hasOne('App\verify_student');
  }
}
