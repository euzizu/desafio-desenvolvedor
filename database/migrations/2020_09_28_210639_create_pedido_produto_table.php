<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidoProdutoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido_produto', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('pedido_id')->unsigned();
            $table->bigInteger('produto_id')->unsigned();
            $table->foreign('pedido_id')
                    ->references('id')
                    ->on('pedido')
                    ->onCascade('delete');
            $table->foreign('produto_id')
                    ->references('id')
                    ->on('produto');
            $table->integer('quantidade');
            $table->decimal('valor_total_produto',10,2);
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
        Schema::dropIfExists('pedido_produto');
    }
}
