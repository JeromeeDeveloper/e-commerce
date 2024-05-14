<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Jerome Porcado',
            'email' => 'jerome.porcado11@gmail.com',
            'contact' => '09954264131',
            'password' => Hash::make('password'),
            'updated_at' => now(),
        ]);
    }
}
