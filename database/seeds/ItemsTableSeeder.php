<?php

use App\Item;
use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
 /**
  * Run the database seeds.
  *
  * @return void
  */
 public function run()
 {

  Item::truncate();
  factory(App\Item::class,20)->create();
//   Item::create(['title' => 'PS4', 'pic_url' => 'http://demo.test/1.jpg', 'desc' => 'ps4的描述', 'price' => '12000']);
//   Item::create(['title' => 'NS', 'pic_url' => 'http://demo.test/2.jpg', 'desc' => 'NS的描述', 'price' => '9000']);
//   Item::create(['title' => 'XBOX ONE', 'pic_url' => 'http://demo.test/3.jpg', 'desc' => 'XBOX ONE的描述', 'price' => '15000']);

 }
}
