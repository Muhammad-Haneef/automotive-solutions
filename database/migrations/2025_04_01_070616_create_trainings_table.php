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
        Schema::create('trainings', function (Blueprint $table) {
            $table->id();

            //$table->foreignId('employee_id')->constrained()->onDelete('cascade');
            $table->foreignId('employee_id');

            $table->string('training_name');
            $table->string('training_type');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('trainer');
            $table->enum('status', ['Pending', 'Completed', 'Ongoing']);
            $table->text('certificate_url')->nullable();

            $table->integer('sort_by')->default(0);
            $table->boolean('is_active')->default(true);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trainings');
    }
};
