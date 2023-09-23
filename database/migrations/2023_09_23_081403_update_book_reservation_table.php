<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('book_reservations', function (Blueprint $table) {
             $table->date('reserve_start')->default(now())->after('book_id');
             $table->date('reserve_end')->default(now())->after('reserve_start');
         });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
