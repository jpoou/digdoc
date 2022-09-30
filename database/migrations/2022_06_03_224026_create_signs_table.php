<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('signs', function (Blueprint $table) {
            $table->id();
            $table->string('code', 4);
            $table->string('name');
            $table->string('unit', 15);
            $table->enum('type', ['number', 'text']);
            $table->boolean('required')->default(true);
            $table->boolean('active')->default(true);
            $table->timestamps();
            $table->string('description');
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('signs');
    }
};
