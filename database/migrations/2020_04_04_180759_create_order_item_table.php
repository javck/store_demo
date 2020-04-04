<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderItemTable extends Migration
{
 /**
  * Run the migrations.
  *
  * @return void
  */
 public function up()
 {
  Schema::create('order_item', function (Blueprint $table) {
   $table->bigIncrements('id');
   $table->unsignedBigInteger("order_id")->index();
   $table->foreign("order_id")->references("id")->on("orders")->onDelete("cascade");
   $table->unsignedBigInteger("item_id")->index();
   $table->foreign("item_id")->references("id")->on("items")->onDelete("cascade");
   $table->unsignedInteger("qty")->default(1);
   $table->string("desc", 500)->nullable();
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
  Schema::table('order_item', function (Blueprint $table) {
   $table->dropForeign(['item_id']);
   $table->dropForeign(['order_id']);
  });
  Schema::dropIfExists('order_item');
 }
}
