<?php

use Illuminate\Database\Seeder;
use Thot\Department;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(Department::class,80)->create();

        Thot\Department::create(['code' => '05', 'name' => 'ANTIOQUIA', 'active' => true]);
        Thot\Department::create(['code' => '08', 'name' => 'ATLANTICO', 'active' => true]);
        Thot\Department::create(['code' => '11', 'name' => 'BOGOTA', 'active' => true]);
        Thot\Department::create(['code' => '13', 'name' => 'BOLIVAR', 'active' => true]);
        Thot\Department::create(['code' => '15', 'name' => 'BOYACA', 'active' => true]);
        Thot\Department::create(['code' => '17', 'name' => 'CALDAS', 'active' => true]);
        Thot\Department::create(['code' => '18', 'name' => 'CAQUETA', 'active' => true]);
        Thot\Department::create(['code' => '19', 'name' => 'CAUCA', 'active' => true]);
        Thot\Department::create(['code' => '20', 'name' => 'CESAR', 'active' => true]);
        Thot\Department::create(['code' => '23', 'name' => 'CORDOBA', 'active' => true]);
        Thot\Department::create(['code' => '25', 'name' => 'CUNDINAMARCA', 'active' => true]);
        Thot\Department::create(['code' => '27', 'name' => 'CHOCO', 'active' => true]);
        Thot\Department::create(['code' => '41', 'name' => 'HUILA', 'active' => true]);
        Thot\Department::create(['code' => '44', 'name' => 'LA GUAJIRA', 'active' => true]);
        Thot\Department::create(['code' => '47', 'name' => 'MAGDALENA', 'active' => true]);
        Thot\Department::create(['code' => '50', 'name' => 'META', 'active' => true]);
        Thot\Department::create(['code' => '52', 'name' => 'NARIÑO', 'active' => true]);
        Thot\Department::create(['code' => '54', 'name' => 'N. DE SANTANDER', 'active' => true]);
        Thot\Department::create(['code' => '63', 'name' => 'QUINDIO', 'active' => true]);
        Thot\Department::create(['code' => '66', 'name' => 'RISARALDA', 'active' => true]);
        Thot\Department::create(['code' => '68', 'name' => 'SANTANDER', 'active' => true]);
        Thot\Department::create(['code' => '70', 'name' => 'SUCRE', 'active' => true]);
        Thot\Department::create(['code' => '73', 'name' => 'TOLIMA', 'active' => true]);
        Thot\Department::create(['code' => '76', 'name' => 'VALLE DEL CAUCA', 'active' => true]);
        Thot\Department::create(['code' => '81', 'name' => 'ARAUCA', 'active' => true]);
        Thot\Department::create(['code' => '85', 'name' => 'CASANARE', 'active' => true]);
        Thot\Department::create(['code' => '86', 'name' => 'PUTUMAYO', 'active' => true]);
        Thot\Department::create(['code' => '88', 'name' => 'SAN ANDRES', 'active' => true]);
        Thot\Department::create(['code' => '91', 'name' => 'AMAZONAS', 'active' => true]);
        Thot\Department::create(['code' => '94', 'name' => 'GUAINIA', 'active' => true]);
        Thot\Department::create(['code' => '95', 'name' => 'GUAVIARE', 'active' => true]);
        Thot\Department::create(['code' => '97', 'name' => 'VAUPES', 'active' => true]);
        Thot\Department::create(['code' => '99', 'name' => 'VICHADA', 'active' => true]);

    }
}
