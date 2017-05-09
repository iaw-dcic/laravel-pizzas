<?php

use Illuminate\Database\Seeder;
use App\Pizza;

class PizzasSeeder extends Seeder {

    public function run()
    {
        DB::table('pizzas')->delete();

        Pizza::create(['nombre' => 'Jamón y Queso', 'precio' => '75', 'tipo' => 'clásica']);
        Pizza::create(['nombre' => 'Fugazzeta', 'precio' => '85', 'tipo' => 'clásica']);
        Pizza::create(['nombre' => 'Muzzarela', 'precio' => '90', 'tipo' => 'clásica']);
        Pizza::create(['nombre' => 'Napolitana', 'precio' => '95', 'tipo' => 'clásica']);
        Pizza::create(['nombre' => 'Roquefort', 'precio' => '85', 'tipo' => 'clásica']);
        Pizza::create(['nombre' => 'Mariscos', 'precio' => '135', 'tipo' => 'especial']);
        Pizza::create(['nombre' => 'Queso Azul y Peras Caramelizadas', 'precio' => '125', 'tipo' => 'especial']);
        Pizza::create(['nombre' => 'Hongos', 'precio' => '110', 'tipo' => 'especial']);
        Pizza::create(['nombre' => 'Ciervo Ahumado', 'precio' => '140', 'tipo' => 'especial']);
        Pizza::create(['nombre' => 'Pollo', 'precio' => '105', 'tipo' => 'especial']);
    }

}