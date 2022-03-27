<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->String('commune_name')->nullable();
            $table->String('commune_name_ascii')->nullable();
            $table->String('daira_name')->nullable();
            $table->String('daira_name_ascii')->nullable();
            $table->String('wilaya_code')->nullable();
            $table->String('wilaya_name')->nullable();
            $table->String('wilaya_name_ascii')->nullable();
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
        Schema::dropIfExists('countries');
    }
}
