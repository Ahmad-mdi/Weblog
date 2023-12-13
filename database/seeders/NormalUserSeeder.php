<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NormalUserSeeder extends Seeder
{
    public function run()
    {
        $guestUser = Role::query()->create([
            'title' => 'normal-user'
        ]);
        $permissions = Permission::query()
            ->whereIn('title',[
                'create-post',
                'read-post',
            ])->get();
        $guestUser->permissions()->attach($permissions);
    }
}
