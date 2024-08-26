<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Encore\Admin\Auth\Database\Administrator;


class AdminaddUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Administrator::create([
            'username' => 'aadmin',
            'password' => Hash::make('admin'),
            'name'     => 'Administrator',
        ]);
    }
}
