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
        Schema::create('tbl_clientLogs', function (Blueprint $table) {
            $table->id();
            $table->string('emailAddress');
            $table->string('Region');
            $table->string('Municipality');
            $table->string('Barangay');
            $table->string('clientType');
            $table->string('firstName');
            $table->string('middleName')->nullable();
            $table->string('lastName');
            $table->string('gender');
            $table->string('birthDate');
            $table->string('contact');
            $table->string('divisionOfResidence');
            $table->string('officeConcerned');
            $table->string('purposeId');
            $table->string('virtualIdNumber');
            $table->string('timeIn')->nullable();
            $table->string('timeOut')->nullable();
            $table->string('logsNumber')->nullable();
            $table->string('series')->nullable();
            $table->timestamps();
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
