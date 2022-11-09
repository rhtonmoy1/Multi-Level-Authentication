<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
{
    $admin = [
        'name' => 'Admin',
        'email' => 'admin@xit.com',
        'password' => bcrypt('11111111')
    ];
    Admin::create($admin);
}
}
