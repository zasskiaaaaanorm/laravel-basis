<?php

use Illuminate\Database\Seeder;

class SatuanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('satuan')->insert([
            'name' => 'kursi',
            
        ]);
    }
}
