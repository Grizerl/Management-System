<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::rename('academic__sessions', 'academic_sessions');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::rename('academic_sessions', 'academic__sessions');
    }
};
