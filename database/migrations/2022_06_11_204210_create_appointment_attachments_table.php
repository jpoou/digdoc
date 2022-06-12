<?php

use App\Models\Appointment;
use App\Models\Attachment;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('appointment_attachment', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Appointment::class);
            $table->foreignIdFor(Attachment::class);
            $table->enum('type', ['history', 'diagnosis', 'prescription', 'study']);
            $table->integer('quantity');
            $table->text('indications');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('appointment_attachment');
    }
};