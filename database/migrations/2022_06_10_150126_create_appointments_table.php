<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id()->autoIncrement;
            $table->foreignId(column:'user_id')->nullable();
            $table->foreignId(column:'service_id')->nullable();
            $table->string(column:'date')->nullable();
            $table->string(column:'time')->nullable();
            $table->float(column:'price')->nullable();
            $table->string(column:'payment', length:6)->default('False');
            $table->string(column:'note',length:100)->nullable();
            $table->string(column:'ip',length:50)->nullable();
            $table->string(column:'status',length:5)->nullable()->default('New');
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
        Schema::dropIfExists('appointments');
    }
};
