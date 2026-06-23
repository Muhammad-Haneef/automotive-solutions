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
        Schema::create('payroll_loans', function (Blueprint $table) {
            $table->id();

            //$table->foreignId('employee_id')->constrained('employees')->onDelete('cascade');
            $table->foreignId('employee_id');

            $table->decimal('loan_amount', 10, 2);
            $table->decimal('monthly_deduction', 10, 2);
            $table->decimal('remaining_balance', 10, 2);
            $table->enum('loan_status', ['Active', 'Paid']);

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
        Schema::dropIfExists('payroll_loans');
    }
};
