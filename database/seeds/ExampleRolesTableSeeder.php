<?php

use Illuminate\Database\Seeder;

class ExampleRolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'display_name' => 'Administrator',
                'created_at' => '2020-04-20 16:31:56',
                'updated_at' => '2020-04-20 16:31:56',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'user',
                'display_name' => '普通用戶',
                'created_at' => '2020-04-20 18:03:48',
                'updated_at' => '2020-04-20 18:03:48',
            ),
        ));
        
        
    }
}