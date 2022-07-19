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
            'name'  => 'Group Kita',
            'email' => 'kitagroup@gmail.com',
            'role'  => 'admin',
            'logo'  => '',
            'password' => Hash::make('123456'),
        ]);
    }
}
