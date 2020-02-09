<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->nullable();
            $table->string('type_game_id')->nullable();
            $table->date('date_booking')->nullable();
            $table->date('date_visit')->nullable();
            $table->time('time_visit')->nullable();
            $table->integer('game_id')->nullable();
            $table->string('book_method_id')->nullable();
            $table->integer('amount_visitors')->nullable();
            $table->integer('price_start')->nullable();
            $table->string('promocode')->nullable();
            $table->string('sertificate')->nullable();
            $table->integer('price_final')->nullable();
            $table->string('prepaid')->nullable();
            $table->integer('local_payment')->nullable();
            $table->string('payment_method_id')->nullable();
            $table->string('phone');
            $table->string('email')->nullable();
            $table->text('found_us');
            $table->text('reason_visit');
            $table->text('comment');
            $table->string('staff')->nullable();
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
        Schema::dropIfExists('sessions');
    }
}
