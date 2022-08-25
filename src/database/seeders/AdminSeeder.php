<?php

namespace Database\Seeders;

use App\Models\Roles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Roles::create([
            'name' => 'admin',
            'description' => 'Has all permissions'
        ]);

        \App\Models\Admins::factory()->create([
            'email'=>'admin@gmail.com', 
            'password'=>Hash::make('admin'), 
            'role'=>'admin'
        ]);
    }
}
