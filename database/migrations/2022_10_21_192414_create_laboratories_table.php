<?php

use App\Models\User;
use App\Models\Attachment;
use App\Models\Appointment;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    public function up()
    {
        Schema::create('laboratories', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Appointment::class);
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Attachment::class);
            $table->text('file')->nullable();
            $table->text('observation')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('laboratories');
    }
};
