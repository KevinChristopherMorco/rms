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
        Schema::table('users', function (Blueprint $table) {
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->date('birthdate');
            $table->string('gender');
            $table->string('card_number');
            $table->string('house_no');
            $table->string('barangay');
            $table->string('city_municipality');
            $table->string('province');
            $table->string('member');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    }
};
