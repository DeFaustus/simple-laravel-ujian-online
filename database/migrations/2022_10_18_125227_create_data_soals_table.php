<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataSoalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_soals', function (Blueprint $table) {
            $table->id();
            $table->foreignId("soal_id")
                ->constrained("soals")
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->string("soal");
            $table->string("pil_1");
            $table->string("pil_2");
            $table->string("pil_3");
            $table->string("pil_4");
            $table->string("kunci");
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
        Schema::dropIfExists('data_soals');
    }
}
