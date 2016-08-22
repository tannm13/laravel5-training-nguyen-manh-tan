<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
  public function target()
  {
    return $this->morphTo();
  }
}
