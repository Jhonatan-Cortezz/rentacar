<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageCar extends Model
{
  use HasFactory;

  protected $fillable = ['url'];
  /* definir relacion polimorfica */
  public function imageable()
  {
    return $this->morphTo();
  }
}
