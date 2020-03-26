<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
        	'name' => 'Администратор',
        	'created_at' => date('Y-m-d')
        ]);
        DB::table('roles')->insert([
        	'name' => 'Пользователь',
        	'created_at' => date('Y-m-d')
        ]);
    }
}
