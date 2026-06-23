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
        Schema::create('payrolls', function (Blueprint $table) {
            $table->id();

            //$table->foreignId('employee_id')->constrained()->onDelete('cascade');
            $table->foreignId('employee_id');

            $table->date('salary_month');
            $table->decimal('basic_salary', 10, 2);
            $table->decimal('tax_deduction', 10, 2);
            $table->decimal('bonus', 10, 2)->nullable();
            $table->decimal('net_salary', 10, 2);
            $table->enum('payment_status', ['Pending', 'Paid']);
            $table->dateTime('paid_on')->nullable();

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
        Schema::dropIfExists('payrolls');
    }
};
