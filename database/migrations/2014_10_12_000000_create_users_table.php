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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('userName')->unique();
            $table->timestamp('userName_v')->nullable();
            $table->string('password');
            $table->string('tel');
            $table->string('role');
            $table->boolean('admin')->default(0);
            $table->string("photo")->default("360_F_503577073_y4ZwKcQttFbUut0A7InyK8LhS3ObKL2t.jpg");
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
