<?php

use Illuminate\Database\Seeder;
use App\OrderItem;

class OrderItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrderItem::truncate();
        factory(OrderItem::class,100)->create();
    }
}
