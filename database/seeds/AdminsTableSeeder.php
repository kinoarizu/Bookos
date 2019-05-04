<?php

use Illuminate\Database\Seeder;
use Faker\Provider\ka_GE\DateTime;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'adminku',
            'email' => 'adminku@gmail.com',
            'password' => bcrypt('adminku'),
            'remember_token' => Str::random(60),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
