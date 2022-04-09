<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->string('phone')->nullable();
            $table->string('permission')->nullable();
            //$table->timestamp('email_verified_at')->nullable();
            $table->unsignedBigInteger('address_id')->nullable();

            //FK
            $table->foreign('address_id')->references('id')->on('address');
            $table->rememberToken();
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
        Schema::table('users', function (Blueprint  $table) {
            $table->dropForeign('users_address_id_foreign');
        });
        Schema::dropIfExists('users');
    }
}
