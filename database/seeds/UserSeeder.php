<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => Str::random(10) . '@gmail.com',
            'phone' => '+22547064449',
            'password' => Hash::make('jjks'),
            'is_admin' => True,
        ]);

        DB::table('users')->insert([
            'name' => 'user',
            'email' => Str::random(10) . '@gmail.com',
            'password' => Hash::make('jjks'),
            'phone' => '+22547064447',
            'is_admin' => False,
        ]);
    }
}
