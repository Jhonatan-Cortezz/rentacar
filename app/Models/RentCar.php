<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentCar extends Model
{
  use HasFactory;

  /* relacion inversa con car */
  public function car(){
    return $this->belongsTo(Car::class);
  }

  /* relacion inversa con user */
  public function user(){
    return $this->belongsTo(User::class);
  }

  /* relacion inversa con cliente */
  public function client(){
    return $this->belongsTo(Client::class);
  }
}
