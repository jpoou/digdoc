<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    public function run()
    {
        $arrayOfPermissionNames = [
            'appointment a index', 'appointment a editor', 'appointment a delete', 'appointment a create',
            'attachment a index', 'attachment a editor', 'attachment a delete', 'attachment a create',
            'branch a index', 'branch a editor', 'branch a delete', 'branch a create',
            'patient a index', 'patient a editor', 'patient a delete', 'patient a create',
            'sign a index', 'sign a editor', 'sign a delete', 'sign a create',
            'staff a index', 'staff a editor', 'staff a delete', 'staff a create',
            'user a index', 'user a editor', 'user a delete', 'user a create',
            'appointment attachment a index', 'appointment attachment a editor', 'appointment attachment a delete', 'appointment attachment a create',
            'appointment sing a index', 'appointment sing a editor', 'appointment sing a delete', 'appointment sing a create',
        ];

        $permissions = collect($arrayOfPermissionNames)->map(function ($permission) {
            return ['name' => $permission, 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => now()];
        });

        Permission::insert($permissions->toArray());
    }
}
