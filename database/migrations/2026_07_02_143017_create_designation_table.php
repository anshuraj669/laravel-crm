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
        Schema::create('designation', function (Blueprint $table) {
            $table->id();
            $table->enum('name', ['Sales Executive', 'Senior Sales Executive', 'Sales Manager', 'Support Executive', 'Support Manager', 'Marketing Executive', 'Digital Marketing Executive', 'Operations Executive', 'Accountant', 'HR Executive', 'Branch Manager', 'General Manager'])->nullable();
            $table->foreignId('department_id')->constrained('department');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('designation');
    }
};
