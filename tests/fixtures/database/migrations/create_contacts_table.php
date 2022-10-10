<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('Contacts', function (Blueprint $table) {
            $table->id('ContactID');
            $table->string('Firstname')->nullable();
            $table->string('Surname')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('contacts');
    }
};
