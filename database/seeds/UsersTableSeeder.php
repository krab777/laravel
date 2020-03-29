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
	        'email' => 'email_moderator@gmail.com',
	        'email_verified_at' => now(),
	        'password' => 12345,
	        'remember_token' => Str::random(10),
	        'role_id' => 2,	        
        ]);

    	DB::table('users')->insert([
        	'name' => 'admin',
	        'email' => 'email_admin@gmail.com',
	        'email_verified_at' => now(),
	        'password' => 12345,
	        'remember_token' => Str::random(10),
	        'role_id' => 3,	        
        ]);

   		factory(User::class, 10)->create();
    }
}
