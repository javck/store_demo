<?php

use Illuminate\Database\Seeder;

class ExampleDataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => '用戶',
                'display_name_plural' => '用戶',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2020-04-20 18:03:48',
                'updated_at' => '2020-04-20 18:03:48',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => '側邊欄',
                'display_name_plural' => '側邊欄',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2020-04-20 18:03:48',
                'updated_at' => '2020-04-20 18:03:48',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => '角色',
                'display_name_plural' => '角色',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'policy_name' => NULL,
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2020-04-20 18:03:48',
                'updated_at' => '2020-04-20 18:03:48',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'cgies',
                'slug' => 'cgies',
                'display_name_singular' => '分類',
                'display_name_plural' => '分類集',
                'icon' => 'voyager-folder',
                'model_name' => 'App\\Cgy',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":"sort","order_display_column":"title","order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2020-04-20 19:48:36',
                'updated_at' => '2020-04-21 00:17:25',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'items',
                'slug' => 'items',
                'display_name_singular' => '商品',
                'display_name_plural' => '商品集',
                'icon' => 'voyager-paint-bucket',
                'model_name' => 'App\\Item',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2020-04-20 19:52:24',
                'updated_at' => '2020-04-21 00:17:42',
            ),
            5 => 
            array (
                'id' => 7,
                'name' => 'elements',
                'slug' => 'elements',
                'display_name_singular' => '網頁元素',
                'display_name_plural' => '網頁元素集',
                'icon' => 'voyager-browser',
                'model_name' => 'App\\Element',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":"sort","order_display_column":"title","order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2020-04-21 00:03:26',
                'updated_at' => '2020-04-21 00:17:33',
            ),
        ));
        
        
    }
}