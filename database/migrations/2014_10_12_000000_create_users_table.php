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
    {//       nombre de tabla, funcion anonima q recibe arg de clase blueprint
        Schema::create('users', function (Blueprint $table) {
            $table->id();//debe ser autoincrement
            $table->string('name');//varchar
            $table->string('email')->unique();//varchar unico
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');//varchar
            $table->rememberToken();//helper de laravel
            $table->timestamps();//created at y updated at, es un helper
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
