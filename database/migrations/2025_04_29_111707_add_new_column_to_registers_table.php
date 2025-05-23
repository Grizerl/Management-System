<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('registers', function (Blueprint $table): void {

            $table->unsignedBigInteger('session_id')->after('course_id');

            $table->foreign('session_id')
                  ->references('id')
                  ->on('academic__sessions')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('registers', function (Blueprint $table): void {
            $table->dropForeign('session_id');
            $table->dropColumn('session_id');
        });
    }
};
