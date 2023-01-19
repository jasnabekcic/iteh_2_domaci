<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class KolonaPortalId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('korisniks', function (Blueprint $table) {
            $table->after('password', function ($table) {
                $table->foreignId('portal_id')->constrained('portals');
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('korisniks', function (Blueprint $table) {
            //
        });
    }
}
