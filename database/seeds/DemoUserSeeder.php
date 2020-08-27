<?php

use App\Models\ProfileLog;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DemoUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rakib = User::create([
            'firstname' => 'rakibul',
            'lastname'  => 'islam',
            'username'  => 'RAKIB',
            'email'     => 'raKib@mail.io',
            'password'  => Hash::make('12345'),
        ]);
        ProfileLog::create([
            'user_id' => $rakib->id,
            'action' => 'created',
            'data' => 'new account',
        ]);

        $masud = User::create([
            'firstname' => 'Hasan',
            'lastname'  => 'Masud',
            'username'  => 'masud',
            'email'     => 'masud@mail.io',
            'password'  => Hash::make('12345'),
        ]);
        ProfileLog::create([
            'user_id' => $masud->id,
            'action' => 'created',
            'data' => 'new account',
        ]);
    }
}
