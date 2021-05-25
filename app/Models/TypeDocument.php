<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeDocument extends Model
{
  use HasFactory;

  /* relacion de uno a muchos con documento del cliente */
  public function clientDocument()
  {
    return $this->hasMany(ClientDocument::class);
  }
}
