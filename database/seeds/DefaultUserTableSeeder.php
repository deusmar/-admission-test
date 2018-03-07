<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class DefaultUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'         => 'Deusmar',
            'email'        => 'deusmar.junior@hotmail.com',
            'password'     => Hash::make(123),
            'verify_token' => str_random(16),
        ]);
    }
}
