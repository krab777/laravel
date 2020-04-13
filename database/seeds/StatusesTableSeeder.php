<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->insert([
            // 'id' => 1,
        	'name' => 'In progress',
        	'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('statuses')->insert([
        	'name' => 'Done',
        	'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('statuses')->insert([
            'name' => 'Canceled',
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
