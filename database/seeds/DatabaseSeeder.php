<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        User::create([
        'name' => 'jose Ricardo',
        'email' => 'jose@gmail.com',
        'password' => Hash::make('123456')
        ]);
    }
}
