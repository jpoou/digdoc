<?php

namespace Database\Seeders;

use App\Models\Attachment;
use App\Models\User;
use App\Models\Branch;
use App\Models\Staff;
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
        Staff::factory()->has(Branch::factory())->count(5)->create();
        Attachment::factory()->count(5)->create();

        $this->call(UserSeeder::class);
        $this->call(SingSeeder::class);
    }
}
