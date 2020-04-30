<?php

use Illuminate\Database\Seeder;

class ExamplePermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2020-04-20 18:03:48',
                'updated_at' => '2020-04-20 18:03:48',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2020-04-20 18:03:48',
                'updated_at' => '2020-04-20 18:03:48',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2020-04-20 18:03:48',
                'updated_at' => '2020-04-20 18:03:48',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2020-04-20 18:03:48',
                'updated_at' => '2020-04-20 18:03:48',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2020-04-20 18:03:48',
                'updated_at' => '2020-04-20 18:03:48',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2020-04-20 18:03:48',
                'updated_at' => '2020-04-20 18:03:48',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2020-04-20 18:03:48',
                'updated_at' => '2020-04-20 18:03:48',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2020-04-20 18:03:48',
                'updated_at' => '2020-04-20 18:03:48',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2020-04-20 18:03:48',
                'updated_at' => '2020-04-20 18:03:48',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2020-04-20 18:03:48',
                'updated_at' => '2020-04-20 18:03:48',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2020-04-20 18:03:48',
                'updated_at' => '2020-04-20 18:03:48',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2020-04-20 18:03:48',
                'updated_at' => '2020-04-20 18:03:48',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2020-04-20 18:03:48',
                'updated_at' => '2020-04-20 18:03:48',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2020-04-20 18:03:48',
                'updated_at' => '2020-04-20 18:03:48',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2020-04-20 18:03:48',
                'updated_at' => '2020-04-20 18:03:48',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2020-04-20 18:03:48',
                'updated_at' => '2020-04-20 18:03:48',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2020-04-20 18:03:48',
                'updated_at' => '2020-04-20 18:03:48',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2020-04-20 18:03:48',
                'updated_at' => '2020-04-20 18:03:48',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2020-04-20 18:03:48',
                'updated_at' => '2020-04-20 18:03:48',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2020-04-20 18:03:48',
                'updated_at' => '2020-04-20 18:03:48',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2020-04-20 18:03:48',
                'updated_at' => '2020-04-20 18:03:48',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2020-04-20 18:03:48',
                'updated_at' => '2020-04-20 18:03:48',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2020-04-20 18:03:48',
                'updated_at' => '2020-04-20 18:03:48',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2020-04-20 18:03:48',
                'updated_at' => '2020-04-20 18:03:48',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2020-04-20 18:03:48',
                'updated_at' => '2020-04-20 18:03:48',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'created_at' => '2020-04-20 18:03:48',
                'updated_at' => '2020-04-20 18:03:48',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'browse_cgies',
                'table_name' => 'cgies',
                'created_at' => '2020-04-20 19:48:36',
                'updated_at' => '2020-04-20 19:48:36',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'read_cgies',
                'table_name' => 'cgies',
                'created_at' => '2020-04-20 19:48:36',
                'updated_at' => '2020-04-20 19:48:36',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'edit_cgies',
                'table_name' => 'cgies',
                'created_at' => '2020-04-20 19:48:36',
                'updated_at' => '2020-04-20 19:48:36',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'add_cgies',
                'table_name' => 'cgies',
                'created_at' => '2020-04-20 19:48:36',
                'updated_at' => '2020-04-20 19:48:36',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'delete_cgies',
                'table_name' => 'cgies',
                'created_at' => '2020-04-20 19:48:36',
                'updated_at' => '2020-04-20 19:48:36',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'browse_items',
                'table_name' => 'items',
                'created_at' => '2020-04-20 19:52:25',
                'updated_at' => '2020-04-20 19:52:25',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'read_items',
                'table_name' => 'items',
                'created_at' => '2020-04-20 19:52:25',
                'updated_at' => '2020-04-20 19:52:25',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'edit_items',
                'table_name' => 'items',
                'created_at' => '2020-04-20 19:52:25',
                'updated_at' => '2020-04-20 19:52:25',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'add_items',
                'table_name' => 'items',
                'created_at' => '2020-04-20 19:52:25',
                'updated_at' => '2020-04-20 19:52:25',
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'delete_items',
                'table_name' => 'items',
                'created_at' => '2020-04-20 19:52:25',
                'updated_at' => '2020-04-20 19:52:25',
            ),
            36 => 
            array (
                'id' => 37,
                'key' => 'browse_elements',
                'table_name' => 'elements',
                'created_at' => '2020-04-21 00:03:26',
                'updated_at' => '2020-04-21 00:03:26',
            ),
            37 => 
            array (
                'id' => 38,
                'key' => 'read_elements',
                'table_name' => 'elements',
                'created_at' => '2020-04-21 00:03:26',
                'updated_at' => '2020-04-21 00:03:26',
            ),
            38 => 
            array (
                'id' => 39,
                'key' => 'edit_elements',
                'table_name' => 'elements',
                'created_at' => '2020-04-21 00:03:26',
                'updated_at' => '2020-04-21 00:03:26',
            ),
            39 => 
            array (
                'id' => 40,
                'key' => 'add_elements',
                'table_name' => 'elements',
                'created_at' => '2020-04-21 00:03:26',
                'updated_at' => '2020-04-21 00:03:26',
            ),
            40 => 
            array (
                'id' => 41,
                'key' => 'delete_elements',
                'table_name' => 'elements',
                'created_at' => '2020-04-21 00:03:26',
                'updated_at' => '2020-04-21 00:03:26',
            ),
        ));
        
        
    }
}