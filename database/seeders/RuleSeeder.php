<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RuleSeeder extends Seeder
{
    public function run()
    {
        $arrayOfRoleNames = [
            'Admin', 'Doctor', 'Nursing', 'Secretary'
        ];

        $roles = collect($arrayOfRoleNames)->map(function ($role) {
            return ['name' => $role, 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => now()];
        });

        Role::insert($roles->toArray());
    }
}
