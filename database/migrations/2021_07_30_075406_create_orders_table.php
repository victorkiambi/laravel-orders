<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('user_email');
            $table->string('order_type');
            $table->string('order_pages');
            $table->string('order_status');
            $table->string('order_level');
            $table->date('order_deadline');
            $table->longText('order_instructions');
            $table->string('file_name')->nullable();
            $table->string('file_path')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
        Schema::table('order', function (Blueprint $table)
        {
            $table->dropForeign('user_id');
        });
    }
}
