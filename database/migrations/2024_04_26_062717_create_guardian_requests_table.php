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
        Schema::create('guardian_requests', function (Blueprint $table) {
            $table->id();
            $table->string('school_name');
            $table->string('class');
                        $table->string('subjects');
            $table->string('address');
                        $table->string('days');
            $table->string('salary');
                        $table->string('teacher_gender');
            $table->string('phone');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guardian_requests');
    }
};
