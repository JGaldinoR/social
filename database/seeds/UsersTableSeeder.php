<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->insert([
		'nombre' => 'manuel',
		'correo' => 'manu@gmail',
		'password' => 'as',
		'codigo' => '20855',
		'rol' => 'Admin',
		'carrera_id' => '1',

		]);
		DB::table('users')->insert([
		'nombre' => 'raul',
		'correo' => 'raul@gmail',
		'password' => 'as',
		'codigo' => '20854',
		'rol' => 'Admin',
		'carrera_id' => '2',

		]);
		DB::table('users')->insert([
		'nombre' => 'jorge',
		'correo' => 'jorge@gmail',
		'password' => 'as',
		'codigo' => '20853',
		'rol' => 'Admin',
		'carrera_id' => '3',

		]);
		DB::table('users')->insert([
		'nombre' => 'pepe',
		'correo' => 'pepe@gmail',
		'password' => 'as',
		'codigo' => '20852',
		'rol' => 'Prestador',
		'carrera_id' => '4',

		]);
		DB::table('users')->insert([
		'nombre' => 'luis',
		'correo' => 'luis@gmail',
		'password' => 'as',
		'codigo' => '20851',
		'rol' => 'Prestador',
		'carrera_id' => '5',

		]);

	
        //
    }
}
