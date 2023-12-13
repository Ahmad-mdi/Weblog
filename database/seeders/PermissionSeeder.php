<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Category_permission
         */
        Permission::query()->insert([
            [
                'title' => 'create-category'
            ],
            [
                'title' => 'read-category'
            ],
            [
                'title' => 'update-category'
            ],
            [
                'title' => 'delete-category'
            ],
        ]);

        /**
         * Post_permission
         */
        Permission::query()->insert([
            [
                'title' => 'create-post'
            ],
            [
                'title' => 'read-post'
            ],
            [
                'title' => 'update-post'
            ],
            [
                'title' => 'delete-post'
            ],
        ]);

        /**
         * user_permission
         */
        Permission::query()->insert([
            [
                'title' => 'create-user'
            ],
            [
                'title' => 'read-user'
            ],
            [
                'title' => 'update-user'
            ],
            [
                'title' => 'delete-user'
            ],
        ]);

        /**
         * Pole_permission
         */
        Permission::query()->insert([
            [
                'title' => 'create-role'
            ],
            [
                'title' => 'read-role'
            ],
            [
                'title' => 'update-role'
            ],
            [
                'title' => 'delete-role'
            ],
        ]);
    }
}
