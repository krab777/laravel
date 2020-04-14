<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->insert([
        	'name' => 'moderator',
	        'email' => 'moderator@mail.com',
	        'email_verified_at' => now(),
	        'password' => bcrypt('123'),
	        // 'remember_token' => Str::random(10),
	        'role_id' => 2,	        
        ]);

    	DB::table('users')->insert([
        	'name' => 'admin',
	        'email' => 'admin@mail.com',
	        'email_verified_at' => now(),
	        'password' => bcrypt('123'),
	        // 'remember_token' => Str::random(10),
	        'role_id' => 3,	        
        ]);

        factory(User::class, 20)->create();
   		
        // foreach (App\Models\Role::all() as $role) {
        //     factory(User::class, 10)->create([
        //         'role_id' => $role->id
        //     ]);
        // }
    }
}
