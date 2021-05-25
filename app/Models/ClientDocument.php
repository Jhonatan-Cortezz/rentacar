<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientDocument extends Model
{
  use HasFactory;

  /* relacion inversa con tipo de docuento */
  public function typeDocument()
  {
    return $this->belongsTo(TypeDocument::class);
  }

  /* relacion de uno a muchos con cliente */
  public function client()
  {
    return $this->hasMany(Client::class);
  }
}
