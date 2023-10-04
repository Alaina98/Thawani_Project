<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()->make(\Spatie\Permission\PermissionRegistrar::class)->forgetCachedPermissions();

        //Admin
        Permission::create(['name'=>'role:create']);
        Permission::create(['name'=>'role:read']);
        Permission::create(['name'=>'role:update']);
        Permission::create(['name'=>'role:delete']);

        Permission::create(['name'=>'user:create']);
        Permission::create(['name'=>'user:read']);
        Permission::create(['name'=>'user:update']);
        Permission::create(['name'=>'user:delete']);

        Permission::create(['name'=>'project:create']);
        Permission::create(['name'=>'project:read']);
        Permission::create(['name'=>'project:update']);
        Permission::create(['name'=>'project:delete']);

        Permission::create(['name'=>'test-case:create']);
        Permission::create(['name'=>'test-case:read']);
        Permission::create(['name'=>'test-case:update']);
        Permission::create(['name'=>'test-case:delete']);

        Permission::create(['name'=>'comment:create']);
        Permission::create(['name'=>'comment:read']);
        Permission::create(['name'=>'comment:update']);
        Permission::create(['name'=>'comment:delete']);

    }
}
