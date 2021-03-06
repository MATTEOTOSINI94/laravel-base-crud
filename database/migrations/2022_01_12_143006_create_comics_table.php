<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title', 150);
            $table->string("series",150);
            $table->string("type",100);
            $table->longText("description");
            $table->decimal('price', 4, 2);
            $table->date("date_out")->nullable();
            $table->string("thumb")->default("https://images-na.ssl-images-amazon.com/images/I/816hPkXyM3L.jpg");
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
        Schema::dropIfExists('comics');
    }
}
