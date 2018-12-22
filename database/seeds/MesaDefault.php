<?php

use Illuminate\Database\Seeder;

class MesaDefault extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Mesa::create([
      'codigo_mesa' =>'Mesa1',
      'capacidad_personas' =>'4',
    ]);

    App\Mesa::create([
      'codigo_mesa' =>'Mesa2',
      'capacidad_personas' =>'4',
    ]);

    App\Mesa::create([
      'codigo_mesa' =>'Mesa3',
      'capacidad_personas' =>'4',
    ]);

    App\Mesa::create([
      'codigo_mesa' =>'Mesa4',
      'capacidad_personas' =>'4',
    ]);

    App\Mesa::create([
      'codigo_mesa' =>'Mesa5',
      'capacidad_personas' =>'4',
    ]);

    App\Mesa::create([
      'codigo_mesa' =>'Mesa6',
      'capacidad_personas' =>'4',
    ]);

    App\Mesa::create([
      'codigo_mesa' =>'Mesa7',
      'capacidad_personas' =>'4',
    ]);

    App\Mesa::create([
      'codigo_mesa' =>'Mesa8',
      'capacidad_personas' =>'4',
    ]);

    App\Mesa::create([
      'codigo_mesa' =>'Mesa9',
      'capacidad_personas' =>'4',
    ]);
    }
}
