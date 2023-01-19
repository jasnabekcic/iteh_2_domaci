<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMudrolijesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mudrolijes', function (Blueprint $table) {
            $table->id();
            $table->string('naslov');
            $table->string('sadrzaj');
            $table->foreignId('korisnik_id')->constrained('korisniks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mudrolijes');
    }
}
