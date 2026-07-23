<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        // Front Desk Users
        Schema::create('frontdesk_users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamps();
        });

        // Walk-in Customers
        Schema::create('walkin_customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->timestamps();
        });

        // Front Desk Bookings
        Schema::create('frontdesk_bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->nullable()->constrained('walkin_customers')->onDelete('set null');
            $table->integer('court_id');
            $table->date('booking_date');
            $table->time('start_time');
            $table->time('end_time');
            $table->string('status')->default('confirmed'); // confirmed, checked_in, completed, cancelled
            $table->string('payment_method')->nullable();
            $table->decimal('total_amount', 10, 2)->default(0);
            $table->text('notes')->nullable();
            $table->timestamps();
        });

        // Gear Rentals
        Schema::create('gear_rentals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->nullable()->constrained('walkin_customers')->onDelete('set null');
            $table->string('gear_name');
            $table->timestamp('rental_time');
            $table->timestamp('return_time')->nullable();
            $table->string('status')->default('active'); // active, returned, overdue
            $table->timestamps();
        });

        // Shop Orders
        Schema::create('shop_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->nullable()->constrained('walkin_customers')->onDelete('set null');
            $table->json('items');
            $table->decimal('total_amount', 10, 2);
            $table->string('payment_method')->nullable();
            $table->string('status')->default('pending'); // pending, completed
            $table->timestamps();
        });

        // Class Check-ins
        Schema::create('class_checkins', function (Blueprint $table) {
            $table->id();
            $table->integer('class_id');
            $table->foreignId('customer_id')->nullable()->constrained('walkin_customers')->onDelete('set null');
            $table->timestamp('checked_in_at');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('class_checkins');
        Schema::dropIfExists('shop_orders');
        Schema::dropIfExists('gear_rentals');
        Schema::dropIfExists('frontdesk_bookings');
        Schema::dropIfExists('walkin_customers');
        Schema::dropIfExists('frontdesk_users');
    }
};