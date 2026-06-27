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
        Schema::create('performance_reviews', function (Blueprint $table) {
            $table->id();

            /*
            $table->foreignId('employee_id')->constrained()->onDelete('cascade');
            $table->foreignId('reviewed_by')->constrained('employees')->onDelete('cascade');
            */

            $table->foreignId('employee_id')->index();
            $table->foreignId('reviewed_by');

            $table->date('review_date');
            $table->decimal('score', 5, 2);
            $table->text('feedback');

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
        Schema::dropIfExists('performance_reviews');
    }
};
