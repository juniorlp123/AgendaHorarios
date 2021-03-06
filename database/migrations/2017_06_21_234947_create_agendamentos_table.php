<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgendamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendamentos', function (Blueprint $table) {
            $table->increments('id');
            $table->date("dia");
            $table->time("hora_inicio");
            $table->time("hora_fim");
            $table->integer("user_id")->unsigned()->nullable();
            $table->integer("cliente_id")->unsigned();
            $table->integer("servico_id")->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');;
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->foreign('servico_id')->references('id')->on('servicos');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("agendamentos");
    }
}
