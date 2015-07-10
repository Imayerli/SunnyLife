<?php

namespace WorldCorean;

use Illuminate\Database\Eloquent\Model;

class suscriptor extends Model
{
	 /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'Registro';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['Identificacion','Nombre','Apellido', 'Fecha_N', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];
}
