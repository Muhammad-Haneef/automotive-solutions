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
        Schema::create('resignations', function (Blueprint $table) {
            $table->id();

            //$table->foreignId('employee_id')->constrained()->onDelete('cascade');
            $table->foreignId('employee_id')->index();

            $table->date('resignation_date');
            $table->date('last_working_day');
            $table->text('reason');
            $table->enum('status', ['Pending', 'Approved', 'Rejected']);
            $table->foreignId('approved_by')->nullable()->constrained('employees')->onDelete('set null');

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
        Schema::dropIfExists('resignations');
    }
};
