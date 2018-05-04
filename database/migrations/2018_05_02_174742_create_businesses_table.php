<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businesses', function (Blueprint $table) {
            $table->increments('id');
            $table -> string( 'Nombre', 50 );
            $table -> string( 'Apellido', 60 );
            $table -> string( 'RCI_Numero', 13 ) -> unique();
            $table -> string ( 'País', 50 );
            $table -> string ( 'Idioma', 2 );
            $table -> string ( 'Password', 60 );
            $table -> string ( 'Género', 20 );
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
        Schema::dropIfExists('businesses');
    }
}
