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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string("firstName");
            $table->string("lastName")->nullable();
            $table->string("tazkira")->unique();
            $table->enum("gender",["male","female"])->default("male");
            $table->string("email")->unique();
            $table->string("phoneNumber")->nullable();
            $table->foreignId("designation_id")->constrained("designations")->onDelete("cascade")->onUpdate("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
