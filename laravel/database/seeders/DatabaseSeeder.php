<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas')->insert([
            'name' => 'Administrativa y financiera',
        ]);
        DB::table('areas')->insert([
            'name' => 'Ingenieria',
        ]);
        DB::table('areas')->insert([
            'name' => 'Desarrollo de negocio',
        ]);
        DB::table('areas')->insert([
            'name' => 'Proyectos',
        ]);
        DB::table('areas')->insert([
            'name' => 'Servicios',
        ]);
        DB::table('areas')->insert([
            'name' => 'Calidad',
        ]);


        DB::table('empleados')->insert([
            'name' => 'Pedro Perez',
            'email' => 'pperez@example.co',
            'sex' => 'M',
            'area_id' => '5',
            'boletin' => '1',
            'description' => 'Hola mundo',
        ]);
        DB::table('empleados')->insert([
            'name' => 'Amalia Bayona',
            'email' => 'abayona@example.co',
            'sex' => 'F',
            'area_id' => '8',
            'boletin' => '0',
            'description' => 'Para contactar a Amalia Bayona, puede escribir al correo electrónico abayona@example.co',
	]);

        DB::table('empleado_rol')->insert([
            'empleado_id' => '3',
            'rol_id' => '4',
        ]);
        DB::table('empleado_rol')->insert([
            'empleado_id' => '3',
            'rol_id' => '7',
        ]);
        DB::table('empleado_rol')->insert([
            'empleado_id' => '3',
            'rol_id' => '2',
        ]);
        DB::table('empleado_rol')->insert([
            'empleado_id' => '4',
            'rol_id' => '1',
        ]);
        DB::table('empleado_rol')->insert([
            'empleado_id' => '4',
            'rol_id' => '2',
        ]);

        DB::table('roles')->insert([
            'name' => 'Desarrollador'
        ]);
        DB::table('roles')->insert([
            'name' => 'Analista'
        ]);
        DB::table('roles')->insert([
            'name' => 'Tester'
        ]);
        DB::table('roles')->insert([
            'name' => 'Diseñador'
        ]);
        DB::table('roles')->insert([
            'name' => 'Profesional PMO'
        ]);
        DB::table('roles')->insert([
            'name' => 'Profesional de servicios'
        ]);
        DB::table('roles')->insert([
            'name' => 'Auxiliar administrativo'
        ]);
        DB::table('roles')->insert([
            'name' => 'Codirector'
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
