<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
  use HasFactory;

  protected $guarded = ['id', 'created_at', 'updated_at'];
  /* relacion muchos a muchos con accesorios */
  public function accesories()
  {
    return $this->belongsToMany(Accesory::class, 'detail_car_accesories');
  }

  /* relacion polimorfica para la imagen */
  public function image()
  {
    return $this->morphOne(ImageCar::class, 'imageable');
  }

  /* relacion de uno a muchos con manto */
  public function maintenance(){
    return $this->hasMany(Maintenance::class);
  }

  /* relacion de uno a muchos con kilometraje*/
  public function kilometer(){
    return $this->hasMany(Kilometer::class);
  }

  /* relacion de uno a muchos con detalle car*/
  public function detail()
  {
    return $this->hasMany(DetailCar::class);
  }

  /* relacion de uno a muchos con Renta */
  public function rent()
  {
    return $this->hasMany(RentCar::class);
  }

}
