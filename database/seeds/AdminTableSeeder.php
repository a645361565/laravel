<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->insert([
           [
               'username'=>'admin',
               'password'=>bcrypt('123456')
           ],
            [
                'username'=>'mabo',
                'password'=>bcrypt('123456')
            ]
        ]);

    }
}
