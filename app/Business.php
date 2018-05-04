<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    //
	    protected $fillable = [
		'Nombre',
		'Apellido',
		'RCI_Numero',
		'País',
		'Idioma',
		'Password',
		'Género'
	];
}
