<?php

namespace Database\Seeders;

use App\Models\Branch;
use App\Models\Staff;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
             'name' => 'Test User',
             'email' => 'test@example.com',
        ]);
        Staff::factory()->has(Branch::factory())->count(2)->create();
        $this->call(SingSeeder::class);
    }
}
