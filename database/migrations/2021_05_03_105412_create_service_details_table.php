<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_details', function (Blueprint $table) {
            $table->id();
            $table->string('first_block_title')->nullable();
            $table->text('first_block_body')->nullable();
            $table->string('first_block_right_text')->nullable();
            $table->string('first_block_right_image')->nullable();

            $table->string('second_block_item1')->nullable();
            $table->string('second_block_item1_icon')->nullable();
            $table->string('second_block_item2')->nullable();
            $table->string('second_block_item2_icon')->nullable();
            $table->string('second_block_item3')->nullable();
            $table->string('second_block_item3_icon')->nullable();
            $table->string('second_block_item4')->nullable();
            $table->string('second_block_item4_icon')->nullable();
            $table->string('second_block_item5')->nullable();
            $table->string('second_block_item5_icon')->nullable();
            $table->string('second_block_item6')->nullable();
            $table->string('second_block_item6_icon')->nullable();

            $table->text('third_block_body')->nullable();
           
            $table->string('four_block_title')->nullable();
            $table->string('four_block_item1_number')->nullable();
            $table->string('four_block_item1_text')->nullable();
            $table->string('four_block_item2_number')->nullable();
            $table->string('four_block_item2_text')->nullable();
            $table->string('four_block_item3_number')->nullable();
            $table->string('four_block_item3_text')->nullable();
            $table->string('four_block_item4_number')->nullable();
            $table->string('four_block_item4_text')->nullable();
            $table->string('four_block_item5_number')->nullable();
            $table->string('four_block_item5_text')->nullable();
            $table->string('four_block_item6_number')->nullable();
            $table->string('four_block_item6_text')->nullable();

            $table->string('five_block_title')->nullable();
            $table->string('five_block_item1')->nullable();
            $table->string('five_block_item2')->nullable();
            $table->string('five_block_item3')->nullable();
            $table->string('five_block_item4')->nullable();
            $table->string('five_block_item5')->nullable();
            $table->string('five_block_item6')->nullable();
            $table->string('five_block_item7')->nullable();
            $table->string('five_block_item8')->nullable();

            $table->string('six_block_title')->nullable();
            $table->text('six_block_item1_title')->nullable();
            $table->string('six_block_item1_icon')->nullable();
            $table->text('six_block_item2_title')->nullable();
            $table->string('six_block_item2_icon')->nullable();
            $table->text('six_block_item3_title')->nullable();
            $table->string('six_block_item3_icon')->nullable();
            $table->text('six_block_item4_title')->nullable();
            $table->string('six_block_item4_icon')->nullable();
            $table->text('six_block_item5_title')->nullable();
            $table->string('six_block_item5_icon')->nullable();
            $table->text('six_block_item6_title')->nullable();
            $table->string('six_block_item6_icon')->nullable();

            $table->text('seven_block_text')->nullable();

            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
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
        Schema::dropIfExists('service_details');
    }
}
