<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soals', function (Blueprint $table) {
            $table->id();
            $table->foreignId("mapel_id")->constrained("mapels")->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId("kelas_id")->constrained("kelas")->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId("data_user_id")->constrained("data_users")->cascadeOnDelete()->cascadeOnUpdate();
            $table->string("nama");
            $table->time("waktu", $precision = 0);
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
        Schema::dropIfExists('soals');
    }
}
