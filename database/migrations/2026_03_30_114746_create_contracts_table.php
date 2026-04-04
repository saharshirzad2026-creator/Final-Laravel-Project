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
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->foreignId("designation_id")->constrained("designations")->onDelete("cascade");
            $table->foreignId("employee_id")->constrained("employees")->onDelete("cascade");
            $table->date("start_date")->default(now());
            $table->date("end_date");
            $table->enum("hire_type",["yearly","monthly","daily","hourly"])->default("monthly");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contracts');
    }
};
