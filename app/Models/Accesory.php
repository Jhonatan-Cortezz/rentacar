<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accesory extends Model
{
  use HasFactory;

  protected $guarded = ['id', 'created_at', 'updated_at'];

  /* relacion muchos a muchos con vehiculos */
  public function cars()
  {
    return $this->belongsToMany(Car::class);
  }
}
