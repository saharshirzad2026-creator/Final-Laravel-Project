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
        //
        schema::create("schoolusers",function(Blueprint $table){
            $table->foreignId("school_id")->constrained("schools")->OnDelete("cascade");
            $table->foreignId("user_id")->constrained("users")->onDelete("cascade");
            $table->primary(["school_id","user_id"]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
