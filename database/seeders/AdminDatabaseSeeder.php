<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name' => 'Muhammad Yousif',
            'email' => 'm.aslhf3ee@gmail.com',
            'password' => bcrypt('P@ssw0rd'),
        ]);
    }
}
