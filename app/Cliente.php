<?php

namespace App;
use App\Cliente;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
	 protected $table = 'clientes';
	 protected $fillable  = ['id','first_name','last_name','email'];    
}
