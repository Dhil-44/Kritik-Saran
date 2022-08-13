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
        $users = [

        ];

        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'logo' => '',
            'password' => Hash::make('123456'),
        ]);
        DB::table('users')->insert([
            'name' => 'CAC Kalbis',
            'email' => 'cackalbis@gmail.com',
            'role' => 'department',
            'logo' => '',
            'password' => Hash::make('123456'),
        ]);
        DB::table('users')->insert([
            'name' => 'AO Kalbis',
            'email' => 'aokalbis@gmail.com',
            'role' => 'department',
            'logo' => '',
            'password' => Hash::make('123456'),
        ]);
        DB::table('users')->insert([
            'name' => 'CSD Kalbis',
            'email' => 'csdkalbis@gmail.com',
            'role' => 'department',
            'logo' => '',
            'password' => Hash::make('123456'),
        ]);
        DB::table('users')->insert([
            'name' => 'Finance Kalbis',
            'email' => 'financekalbis@gmail.com',
            'role' => 'department',
            'logo' => '',
            'password' => Hash::make('123456'),
        ]);
        DB::table('users')->insert([
            'name' => 'Rektorat Kalbis',
            'email' => 'rektoratkalbis@gmail.com',
            'role' => 'department',
            'logo' => '',
            'password' => Hash::make('123456'),
        ]);
//        HIMSI, HIMIF, HIMAN, HIMAK, HIMIK
        DB::table('users')->insert([
            'name' => ' HIMSI',
            'email' => 'himsi@gmail.com',
            'role' => 'user',
            'logo' => '',
            'password' => Hash::make('123456'),
        ]);
        DB::table('users')->insert([
            'name' => 'HIMIF',
            'email' => 'himif@gmail.com',
            'role' => 'user',
            'logo' => '',
            'password' => Hash::make('123456'),
        ]);
        DB::table('users')->insert([
            'name' => 'HIMAN',
            'email' => 'himan@gmail.com',
            'role' => 'user',
            'logo' => '',
            'password' => Hash::make('123456'),
        ]);
        DB::table('users')->insert([
            'name' => 'HIMAK',
            'email' => 'himak@gmail.com',
            'role' => 'user',
            'logo' => '',
            'password' => Hash::make('123456'),
        ]);
        DB::table('users')->insert([
            'name' => 'HIMIK',
            'email' => 'himik@gmail.com',
            'role' => 'user',
            'logo' => '',
            'password' => Hash::make('123456'),
        ]);
    }
}
