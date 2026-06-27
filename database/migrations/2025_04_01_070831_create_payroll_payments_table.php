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
        Schema::create('payroll_payments', function (Blueprint $table) {
            $table->id();

            /*
            $table->foreignId('payroll_id')->constrained('payrolls')->onDelete('cascade');
            $table->foreignId('employee_id')->constrained('employees')->onDelete('cascade');
            */

            $table->foreignId('payroll_id')->index();
            $table->foreignId('employee_id')->index();

            $table->enum('payment_method', ['Bank Transfer', 'Cash', 'Check', 'Online Payment']);
            $table->string('transaction_id')->nullable();
            $table->decimal('amount_paid', 10, 2);
            $table->dateTime('payment_date');
            $table->enum('status', ['Success', 'Failed', 'Pending']);

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
        Schema::dropIfExists('payroll_payments');
    }
};
