<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('labs', function (Blueprint $table) {
        $table->id();
        $table->string('lab_name');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('labs');
}
};
