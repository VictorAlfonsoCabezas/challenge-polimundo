<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('persons', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('second_name')->nullable();
            $table->string('last_name');
            $table->string('surname')->nullable();
            $table->string('sex', 2)->nullable();
            $table->string('citizenship_type', 2)->nullable();
            $table->string('citizenship_card')->nullable();
            $table->date('birth_date');
            $table->string('phone');
            $table->string('cellular')->nullable();
            $table->string('email')->nullable();
            $table->string('address');
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('persons');
    }

}
