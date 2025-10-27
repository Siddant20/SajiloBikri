<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'create listing']);
        Permission::create(['name' => 'edit listing']);
        Permission::create(['name' => 'delete listing']);


        Role::create(['name' => 'admin'])->givePermissionTo([]);
        Role::create(['name' => 'buyer']);
        Role::create(['name' => 'seller']);

    }
}
