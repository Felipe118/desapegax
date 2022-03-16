<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->float('price',8,2);
            $table->boolean('active');
            $table->unsignedBigInteger('categoria_id');
            $table->unsignedBigInteger('user_id');

            //FK
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->foreign('user_id')->references('id')->on('users');

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
        Schema::table('items', function (Blueprint  $table) {
            $table->dropForeign('items_categoria_id_foreign');
            $table->dropForeign('items_user_id_foreign');
        });
        Schema::dropIfExists('items');
    }
}
