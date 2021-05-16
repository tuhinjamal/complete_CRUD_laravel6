<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLedgermodelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ledgermodels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('cash')->nullable();
            $table->integer('receivable')->nullable();
            $table->integer('equipment')->nullable();
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
        Schema::dropIfExists('ledgermodels');
    }
}
