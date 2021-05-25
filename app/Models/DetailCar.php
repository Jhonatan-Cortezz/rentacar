<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailCar extends Model
{
  use HasFactory;

  /* relacion inversa con car */
  public function car(){
    return $this->belongsTo(Car::class);
  }
}
