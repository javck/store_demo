<?php

use Illuminate\Database\Seeder;
use App\Cgy;

class CgiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cgy::truncate();
        factory(App\Cgy::class,10)->create();
    }
}
