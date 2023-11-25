<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::truncate();
        User::create([
            'name'=>'ahemdghoneim',
            'email'=>'ahmdghoneim@gmail.com',
            'password'=>Hash::make('12345678'),
        ]);
        User::create([
            'name'=>'ghoneim',
            'email'=>'ghoneim@gmail.com',
            'password'=>Hash::make('12345678'),
        ]);
        User::create([
            'name'=>'abdo',
            'email'=>'abdo@gmail.com',
            'password'=>Hash::make('12345678'),
        ]);
    }
}
