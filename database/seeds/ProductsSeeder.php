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
        DB::table(Tables::$products)->insert([
            'name' => 'Cerveja'
        ]);
        DB::table(Tables::$products)->insert([
            'name' => 'Carne'
        ]);
        DB::table(Tables::$products)->insert([
            'name' => 'Pão de alho'
        ]);
        DB::table(Tables::$products)->insert([
            'name' => 'Refrigerante'
        ]);
        DB::table(Tables::$products)->insert([
            'name' => 'Guardanapo'
        ]);
        DB::table(Tables::$products)->insert([
            'name' => 'Carvão'
        ]);
        DB::table(Tables::$products)->insert([
            'name' => 'Alcool'
        ]);
        DB::table(Tables::$products)->insert([
            'name' => 'Churrasqueira'
        ]);
    }
}
