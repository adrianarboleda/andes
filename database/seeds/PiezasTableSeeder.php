<?php

use Illuminate\Database\Seeder;

class PiezasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*\DB::table('piezas')->insert([
            'nombre' => 'Varilla',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        \App\Pieza::create([
            'nombre' => 'clavo'
        ]);*/

        factory(App\Pieza::class, 20)->create();
    }
}
