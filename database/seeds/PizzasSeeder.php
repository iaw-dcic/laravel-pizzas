<?php

use Illuminate\Database\Seeder;

class PizzasSeeder extends Seeder {

    public function run()
    {
        DB::table('pizzas')->delete();

        Pizzas::create(['nombre' => 'Jamón y Queso', 'precio' => '75', 'tipo' => 'clásica']);
        Pizzas::create(['nombre' => 'Fugazzeta', 'precio' => '85', 'tipo' => 'clásica']);
        Pizzas::create(['nombre' => 'Muzzarela', 'precio' => '90', 'tipo' => 'clásica']);
        Pizzas::create(['nombre' => 'Napolitana', 'precio' => '95', 'tipo' => 'clásica']);
        Pizzas::create(['nombre' => 'Roquefort', 'precio' => '85', 'tipo' => 'clásica']);

        Pizzas::create(['nombre' => 'Mariscos', 'precio' => '135', 'tipo' => 'especial']);
        Pizzas::create(['nombre' => 'Queso Azul y Peras Caramelizadas', 'precio' => '125', 'tipo' => 'especial']);
        Pizzas::create(['nombre' => 'Hongos', 'precio' => '110', 'tipo' => 'especial']);
        Pizzas::create(['nombre' => 'Ciervo Ahumado', 'precio' => '140', 'tipo' => 'especial']);
        Pizzas::create(['nombre' => 'Pollo', 'precio' => '105', 'tipo' => 'especial']);
    }

}