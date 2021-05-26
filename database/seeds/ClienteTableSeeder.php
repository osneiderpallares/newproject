<?php

use Illuminate\Database\Seeder;
use App\Cliente;

class ClienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cliente::create([
          'id'       => 1065609841,
          'first_name'   => 'OSNEIDER',
          'last_name'    => 'PALLARES',
          'email'		 => 'osneider.pallares20@gmail.com'
      ]);
        Cliente::create([
          'id'       => 1065609842,
          'first_name'   => 'JOSE',
          'last_name'    => 'RAMIREZ',
          'email'		 => 'jose.ramirez@gmail.com'
      ]);
        Cliente::create([
          'id'       => 1065609843,
          'first_name'   => 'EDUARDO',
          'last_name'    => 'PÉREZ',
          'email'		 => 'eduardo.perez@gmail.com'
      ]);
    }
}
