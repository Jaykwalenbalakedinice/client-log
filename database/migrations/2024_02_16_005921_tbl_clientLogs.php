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
            $table->string('birthDate');
            $table->string('firstName');
            $table->string('middleName');
            $table->string('lastName');
            $table->string('gender');
            $table->string('address');
            $table->string('contact');
            $table->string('clientType');
            $table->string('purposeId');
            $table->string('officeConcernedId');
            $table->string('timeIn');
            $table->string('timeOut');
            $table->string('logsNumber');
            $table->string('virtualdNumber');
            $table->string('series');
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