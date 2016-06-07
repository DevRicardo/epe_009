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

        for ($i=1; $i < 10 ; $i++) { 
            # code...

            User::create([
            'name' => 'jose Ricardo_'.$i,
            'email' => 'jose_'.$i.'@gmail.com',
            'password' => Hash::make('123456')
            ]);
        }

    }
}
