<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('booking_id')->unique();
            $table->string('full_name');
            $table->string('phone');
            $table->string('email');
            $table->enum('event_type', [
                'wedding',
                'corporate_event',
                'birthday_party',
                'festival_event',
                'public_event',
                'private_party',
                'other'
            ]);
            $table->json('services_needed');
            $table->date('event_date');
            $table->string('event_location');
            $table->integer('number_of_guests');
            $table->text('additional_details')->nullable();
            $table->enum('status', ['new_event', 'in_progress', 'completed'])->default('new_event');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
