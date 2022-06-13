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
        User::factory()->create([
             'name' => 'Test User',
             'email' => 'test@example.com',
        ]);
        Staff::factory()->has(Branch::factory())->count(5)->create();
        Attachment::factory()->count(30)->create();

        $this->call(SingSeeder::class);
    }
}
