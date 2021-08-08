<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstatisticasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estatistica_usuarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->decimal('balanco', 10, 2)->nullable()->default(0);
            $table->bigInteger('ltv')->nullable()->default(0);
            $table->decimal('cac', 10, 2)->nullable()->default(0);
            $table->decimal('ticket_medio', 10, 2)->nullable()->default(0);
            $table->decimal('ROI', 10, 2)->nullable()->default(0);
            $table->integer('NPS')->nullable()->default(0);
            $table->integer('taxa_convercao')->nullable()->default(0);
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
        Schema::dropIfExists('estatisticas');
    }
}
