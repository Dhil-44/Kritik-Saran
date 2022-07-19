<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;


class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'name'  => 'CAC Kalbis',
            'email' => 'cackalbis@gmail.com',
            'role'  => 'departmen',
            'logo'  => '',
            'password' => Hash::make('123456'),
        ]);
        DB::table('users')->insert([
            'name'  => 'AO Kalbis',
            'email' => 'aokalbis@gmail.com',
            'role'  => 'departmen',
            'logo'  => '',
            'password' => Hash::make('123456'),
        ]);
        DB::table('users')->insert([
            'name'  => 'CSD Kalbis',
            'email' => 'csdkalbis@gmail.com',
            'role'  => 'departmen',
            'logo'  => '',
            'password' => Hash::make('123456'),
        ]);
        DB::table('users')->insert([
            'name'  => 'Finance Kalbis',
            'email' => 'financekalbis@gmail.com',
            'role'  => 'departmen',
            'logo'  => '',
            'password' => Hash::make('123456'),
        ]);
        DB::table('users')->insert([
            'name'  => 'Rektorat Kalbis',
            'email' => 'rektoratkalbis@gmail.com',
            'role'  => 'departmen',
            'logo'  => '',
            'password' => Hash::make('123456'),
        ]);
    }
}