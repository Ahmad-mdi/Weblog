<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = Role::query()->create([
            'title' => 'super-admin',
        ]);

        $adminRole->permissions()->attach(Permission::all());
        User::query()->insert([
            'role_id' => $adminRole->id,
            'name' => 'Ahmad',
            'email' => 'admimohammadi@gmail.com',
            'phone' => '09387032713',
            'password' => Hash::make(123456),
        ]);
    }
}
