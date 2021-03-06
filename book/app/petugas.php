<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\table_petugas as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class petugas extends Authenticatable implements JWTSubject
{
  use Notifiable;
  protected $table='table_petugas';
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'nama_petugas','alamat','nomer_telepon','username','password'
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
      'password', 'remember_token',
  ];

  /**
   * The attributes that should be cast to native types.
   *
   * @var array
   */
  protected $casts = [
      'email_verified_at' => 'datetime',
  ];
  public function getJWTIdentifier()
  {
    return $this->getKey();
  }
  public function getJWTCustomClaims()
  {
    return [];
  }
}
