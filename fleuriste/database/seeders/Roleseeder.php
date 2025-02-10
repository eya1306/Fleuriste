<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class Roleseeder extends Seeder
{

    public function run(): void
    {
        $fleuristeRole=Role::create(['name'=>'fleuriste']);
        $clientRole=Role::create(['name'=>'client']);

    }
}
