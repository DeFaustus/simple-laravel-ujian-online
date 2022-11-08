<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->constrained("users")->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId("kelas_id")->nullable()->constrained("kelas")->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId("mapel_id")->nullable()->constrained("mapels")->cascadeOnDelete()->cascadeOnUpdate();
            $table->string("nik");
            $table->string("nama", 40);
            $table->string("no_telp", 15);
            $table->string("foto");
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
        Schema::dropIfExists('data_users');
    }
}
