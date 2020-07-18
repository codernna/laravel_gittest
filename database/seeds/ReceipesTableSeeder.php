<?php

use Illuminate\Database\Seeder;

class ReceipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('receipes')->insert([
            'name' => 'Spicy2x',
            'ingredients' => 'spicy, noodles, meat',
            'category' => 'Korean Food',
        ]);
    }
}
