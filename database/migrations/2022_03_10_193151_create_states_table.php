<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('states', function (Blueprint $table) {
            $table->id();
            $table->String('commune_name')->nullable();
            $table->String('commune_name_ascii')->nullable();
            $table->String('daira_name')->nullable();
            $table->String('daira_name_ascii')->nullable();
            $table->String('wilaya_code')->nullable();
            $table->String('wilaya_name')->nullable();
            $table->String('wilaya_name_ascii')->nullable();

            $table->string('countrie_id');
            
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
        Schema::dropIfExists('states');
    }
}
