<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilais', function (Blueprint $table) {
            $table->id();
            $table->foreignId('soal_id')
                ->constrained('soals')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->foreignId('data_user_id')
                ->constrained('data_users')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->integer('nilai');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nilais');
    }
}
