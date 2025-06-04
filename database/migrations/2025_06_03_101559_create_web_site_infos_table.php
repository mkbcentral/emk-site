<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('web_site_infos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('phone');
            $table->string('other_phone')->nullable();
            $table->string('email');
            $table->string('other_email')->nullable();
            $table->string('address');
            $table->string('logo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('web_site_infos');
    }
};
