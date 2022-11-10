<?php

namespace Database\Seeders;

use App\Models\Attachment;
use App\Models\Medicine;
use App\Models\Patient;
use App\Models\Staff;
use Illuminate\Database\Seeder;

class FakeDateSeeder extends Seeder
{
    public function run()
    {
        Staff::factory()->count(3)->create();
        Medicine::factory()->count(100)->create();
        // Attachment::factory()->count(50)->create();
        Patient::factory()->count(50)->create();
    }
}
