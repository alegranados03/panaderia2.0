<?php

use Illuminate\Database\Seeder;

class rolDefaultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('roles')->insert(['name'=>'Administrador','slug'=>'Administrador','special'=>'all-access']);
      DB::table('roles')->insert(['name'=>'Recepcionista','slug'=>'Recepcionista']);
      DB::table('roles')->insert(['name'=>'Cliente','slug'=>'Cliente']);
    }
}
