<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class fleuristeseeder extends Seeder
{

    public function run(): void
    {
        User::updateOrCreate(['email' => 'fleuristeadmin@gmail.com'], [
            'name' => 'fleuriste',
            'password' => 'fleuristewebsite123',

        ]);
        $user = User::where('email', 'fleuristeadmin@gmail.com')->first();
        $user->assignRole('fleuriste');

    }
}
