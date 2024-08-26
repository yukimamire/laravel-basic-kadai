<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Encore\Admin\Auth\Database\Administrator;

class AdminUser1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Administrator::create([
            'username' => 'admin',
            'password' => Hash::make('admin'),
            'name'     => 'Administrator',
        ]);
    }
}
