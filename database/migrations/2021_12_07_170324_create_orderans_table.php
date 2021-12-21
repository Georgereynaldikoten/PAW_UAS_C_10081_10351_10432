<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderans', function (Blueprint $table) {
            $table->id();
            $table->String('sender_name');
            $table->String('sender_origin');
            $table->String('phone_number');
            $table->String('post_code');
            $table->String('address1');
            $table->String('name_recip');
            $table->String('destination');
            $table->String('phone_recipt');
            $table->String('post_recipt');
            $table->String('address2');
            $table->String('item_name');
            $table->String('item_type');
            $table->String('service');
            $table->String('quantity');
            $table->String('weight');
            $table->String('height');
            $table->String('width');
            $table->String('length');
            $table->String('notes');
            $table->String('ordertype');
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
        Schema::dropIfExists('orderans');
    }
}
