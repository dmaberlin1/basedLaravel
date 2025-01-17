<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
//            $table->increments('id');
            $table->id()->unsigned();
            $table->string('name',20);
            $table->string('email',100)->unique();
            $table->string('password',255);
            $table->string('avatar')->nullable();
            $table->timestamps();
            $table->timestamp('updated')->nullable()->useCurrent()->useCurrentOnUpdate();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
