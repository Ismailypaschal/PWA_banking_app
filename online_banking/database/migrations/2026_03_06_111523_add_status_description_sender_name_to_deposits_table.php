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
        Schema::table('deposits', function (Blueprint $table) {
            $table->string('description')->nullable()->after('deposit_proof');
            $table->string('sender_name')->nullable()->after('amount');
            $table->string('reference')->after('description');
        });
    }

    public function down(): void
    {
        Schema::table('deposits', function (Blueprint $table) {
            $table->dropColumn(['sender_name', 'description', 'reference']);
        });
    }
};
