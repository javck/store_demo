<?php

use Illuminate\Database\Seeder;

class ExampleMenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menus')->delete();
        
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'created_at' => '2020-04-20 18:03:48',
                'updated_at' => '2020-04-20 18:03:48',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'frontend',
                'created_at' => '2020-04-20 18:05:53',
                'updated_at' => '2020-04-20 18:05:53',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'Footer',
                'created_at' => '2020-04-21 00:53:27',
                'updated_at' => '2020-04-21 00:53:27',
            ),
        ));
        
        
    }
}