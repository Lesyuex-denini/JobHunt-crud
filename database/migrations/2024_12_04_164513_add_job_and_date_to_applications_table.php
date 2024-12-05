<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('applications', function (Blueprint $table) {
            // Check if 'job_applying_for' column exists before adding
            if (!Schema::hasColumn('applications', 'job_applying_for')) {
                $table->string('job_applying_for')->after('civil_status');
            }

            // Check if 'date_today' column exists before adding
            if (!Schema::hasColumn('applications', 'date_today')) {
                $table->date('date_today')->default(DB::raw('CURRENT_DATE'))->after('job_applying_for');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('applications', function (Blueprint $table) {
            $table->dropColumn(['job_applying_for', 'date_today']);
        });
    }
};
