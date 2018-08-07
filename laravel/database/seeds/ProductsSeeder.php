<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Cerveja'
        ]);
        DB::table('products')->insert([
            'name' => 'Carne'
        ]);
        DB::table('products')->insert([
            'name' => 'Pão de alho'
        ]);
        DB::table('products')->insert([
            'name' => 'Refrigerante'
        ]);
        DB::table('products')->insert([
            'name' => 'Guardanapo'
        ]);
        DB::table('products')->insert([
            'name' => 'Carvão'
        ]);
        DB::table('products')->insert([
            'name' => 'Alcool'
        ]);
        DB::table('products')->insert([
            'name' => 'Churrasqueira'
        ]);
    }
}
