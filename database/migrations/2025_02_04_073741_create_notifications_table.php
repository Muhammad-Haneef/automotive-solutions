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
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
        /*
            // Ensure this references the correct table
            $table->foreignId('notification_type_id')->constrained('notification_types')->onDelete('set null');
        
            // Ensure these reference the correct tables
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('set null');
            $table->foreignId('system_user_id')->nullable()->constrained('system_users')->onDelete('set null');
        */

            $table->foreignId('notification_type_id')->index();
                    
            $table->foreignId('user_id')->index();
            $table->foreignId('system_user_id')->index();


            $table->string('title');
            $table->text('message');
        
            $table->boolean('is_read')->default(false);
        
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
        Schema::dropIfExists('notifications');
    }
};
