<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->string('name');
	    $table->string('surname');
            $table->string('e-mail')->Unique();
	    $table->string('house number');
            $table->string('street');
	    $table->string('city');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('people');
    }
};
