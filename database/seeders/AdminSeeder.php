<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create(
            [
                'id'=>Str::uuid(),
                'name' => 'Admin', 
                'email' => 'admin@admin.com', 
                'password' => Hash::make('password')
        ]);
    }
}