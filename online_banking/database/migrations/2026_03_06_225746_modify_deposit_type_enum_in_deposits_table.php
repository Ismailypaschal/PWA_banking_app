<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement("
            ALTER TABLE deposits 
            MODIFY deposit_type ENUM( 'Bank Transfer', 'Crypto', 'Paypal', 'CashApp', 'Wire Transfer')
        ");
    }

    public function down(): void
    {
        DB::statement("
            ALTER TABLE deposits 
            MODIFY deposit_type ENUM('Bitcoin', 'Dogecoin', 'Ethereum', 'Paypal') 
        ");
    }
};
