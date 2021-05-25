<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
  use HasFactory;

  /* relacion inversa con ClientDocument */
  public function clientDocument()
  {
    return $this->belongsTo(ClientDocument::class);
  }

  /* relacion de uno a muchos con Renta */
  public function renta()
  {
    return $this->hasMany(RentCar::class);
  }
}
