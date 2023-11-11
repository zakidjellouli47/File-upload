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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->String('name')->nullable();
            $table->String('username')->unique()->nullable();
            $table->String('email')->unique()->nullable();
            $table->String('password')->nullable();
            $table->String('picture')->nullable();
            $table->String('address')->nullable();
            $table->String('number')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->enum('status',['Pending','Active'])->default('Pending');
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
        Schema::dropIfExists('clients');
    }
};
