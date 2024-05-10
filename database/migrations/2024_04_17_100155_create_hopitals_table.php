<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHopitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hopitals', function (Blueprint $table) {
            $table->id();
            $table->string('nom_hopital');
            $table->string('adresse_hopital');
            $table->string('num_tel_hopital');
            $table->text('infos')->nullable();
            $table->string('num_identi');
            $table->text('services_medicaux')->nullable();
            $table->text('infos_professionnel')->nullable();
            $table->string('type_hopi');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('hopitals');
    }
};
