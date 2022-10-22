<?php

use App\Models\Appointment;
use App\Models\Medicine;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('prescriptions', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Appointment::class);
            $table->foreignIdFor(Medicine::class);
            $table->foreignIdFor(User::class);
            $table->string('dose');
            $table->string('frequency');
            $table->string('duration');
            $table->text('comment')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('prescriptions');
    }
};
