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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            /*
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignId('vendor_id')->nullable()->constrained('users')->onDelete('set null');
            $table->foreignId('order_source_id')->nullable()->constrained('sources')->onDelete('set null');
            $table->foreignId('coupon_id')->nullable()->constrained('coupons')->onDelete('set null');
            $table->foreignId('confirmed_by')->nullable()->constrained('users')->onDelete('set null');
            $table->foreignId('status_id')->nullable()->constrained('users')->onDelete('set null');

            $table->foreignId('shipping_address_id')->nullable()->constrained('addresses')->onDelete('set null');
            $table->foreignId('billing_address_id')->nullable()->constrained('addresses')->onDelete('set null');
            */

            $table->foreignId('user_id')->default(0);
            $table->foreignId('vendor_id')->default(0);
            $table->foreignId('order_source_id')->default(0);
            $table->foreignId('coupon_id')->default(0);
            $table->foreignId('confirmed_by')->default(0);
            $table->foreignId('status_id')->default(0);

            $table->foreignId('shipping_address_id')->default(0);
            $table->foreignId('billing_address_id')->default(0);

            $table->timestamp('order_date')->useCurrent();
            $table->string('order_no')->unique();
            $table->string('referral_code')->nullable();
            $table->text('instructions')->nullable();
            
            $table->integer('qty')->default(1);
            $table->decimal('subtotal', 10, 2);
            $table->decimal('advance', 10, 2)->default(0.00);
            $table->decimal('discount', 10, 2)->default(0.00);
            $table->decimal('tax', 10, 2)->default(0.00);
            $table->decimal('redeem_amount', 10, 2)->default(0.00);
            $table->decimal('shipping_cost', 10, 2)->default(0.00);
            $table->decimal('total', 10, 2);
            $table->text('customer_notes')->nullable();
            $table->text('admin_notes')->nullable();

            $table->string('payment_method')->nullable();
            $table->enum('payment_status', ['pending', 'paid', 'failed', 'refunded'])->default('pending');
            $table->timestamp('payment_date')->nullable();
            $table->string('transaction_id')->nullable();

            /*
            $table->foreignId('shipper_id')->nullable()->constrained('shippers')->onDelete('set null');
            */
            $table->foreignId('shipper_id')->default(0);
            $table->string('shipping_method')->nullable();
            $table->enum('shipping_status', ['pending', 'shipped', 'delivered', 'returned'])->default('pending');
            $table->timestamp('estimated_delivery_date')->nullable();
            $table->string('shipper_slip_link')->nullable();
            $table->string('shipped_result')->nullable();
            $table->string('shipped_ref')->nullable();
     
            $table->string('tracking_number')->nullable();
            $table->string('tracking_result')->nullable();
            $table->string('tracking_result_complete')->nullable();

            $table->text('cancellation_reason')->nullable();
            $table->text('return_reason')->nullable();

            $table->decimal('commission_fee', 10, 2)->default(0.00);
            $table->decimal('vendor_earnings', 10, 2)->default(0.00);
            $table->enum('payout_status', ['pending', 'paid'])->default('pending');

            $table->integer('sort_by')->default(0)->nullable();
            $table->boolean('is_active')->default(true)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
