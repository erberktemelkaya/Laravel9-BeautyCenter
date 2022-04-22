<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /*
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->foreignId(column:'category_id')->nullable();
            $table->foreignId(column:'user_id')->nullable();
            $table->string(column:'title');
            $table->string(column:'keywords')->nullable();
            $table->string(column:'description')->nullable();
            $table->string(column:'image')->nullable();
            $table->text(column:'detail')->nullable();
            $table->float(column:'price')->nullable();
            $table->string(column:'status', length:6)->default('False');
            $table->timestamps();
        });
    }

    /*
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
};
