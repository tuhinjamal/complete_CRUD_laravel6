<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLedgersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ledgers', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->string('cash')->nullable();
            $table->string('receivable')->nullable();
            $table->string('equipment')->nullable();
            $table->integer('note_payble')->nullable();
            $table->integer('account_payble')->nullable();
            $table->integer('capital')->nullable();
            $table->integer('drawing')->nullable();
            $table->integer('revenue')->nullable();
            $table->integer('expense')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
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
        Schema::dropIfExists('ledgers');
    }
}
