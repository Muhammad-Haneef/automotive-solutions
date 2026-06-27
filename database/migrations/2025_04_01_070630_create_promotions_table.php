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
        Schema::create('promotions', function (Blueprint $table) {
            $table->id();

            /*
            $table->foreignId('employee_id')->constrained()->onDelete('cascade');
            $table->foreignId('approved_by')->constrained('employees')->onDelete('cascade');
            */
            $table->foreignId('employee_id')->index();
            $table->foreignId('approved_by');

            $table->string('old_position');
            $table->string('new_position');
            $table->decimal('old_salary', 10, 2);
            $table->decimal('new_salary', 10, 2);
            $table->date('promotion_date');
            $table->text('reason');

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
        Schema::dropIfExists('promotions');
    }
};
