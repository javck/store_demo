<?php

use Illuminate\Database\Seeder;

class ExampleTranslationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('translations')->delete();
        
        \DB::table('translations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 14,
                'locale' => 'en',
                'value' => '測試區',
                'created_at' => '2020-04-20 18:15:48',
                'updated_at' => '2020-04-20 18:15:48',
            ),
            1 => 
            array (
                'id' => 2,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 22,
                'locale' => 'en',
                'value' => 'Id',
                'created_at' => '2020-04-20 20:00:52',
                'updated_at' => '2020-04-20 20:00:52',
            ),
            2 => 
            array (
                'id' => 3,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 23,
                'locale' => 'en',
                'value' => '標題',
                'created_at' => '2020-04-20 20:00:52',
                'updated_at' => '2020-04-20 20:00:52',
            ),
            3 => 
            array (
                'id' => 4,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 24,
                'locale' => 'en',
                'value' => '分類描述',
                'created_at' => '2020-04-20 20:00:52',
                'updated_at' => '2020-04-20 20:00:52',
            ),
            4 => 
            array (
                'id' => 5,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 25,
                'locale' => 'en',
                'value' => '是否開啟',
                'created_at' => '2020-04-20 20:00:53',
                'updated_at' => '2020-04-20 20:00:53',
            ),
            5 => 
            array (
                'id' => 6,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 26,
                'locale' => 'en',
                'value' => '創建於',
                'created_at' => '2020-04-20 20:00:53',
                'updated_at' => '2020-04-20 20:00:53',
            ),
            6 => 
            array (
                'id' => 7,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 27,
                'locale' => 'en',
                'value' => '更新於',
                'created_at' => '2020-04-20 20:00:53',
                'updated_at' => '2020-04-20 20:00:53',
            ),
            7 => 
            array (
                'id' => 8,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 28,
                'locale' => 'en',
                'value' => '圖片',
                'created_at' => '2020-04-20 20:00:53',
                'updated_at' => '2020-04-20 20:00:53',
            ),
            8 => 
            array (
                'id' => 9,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 29,
                'locale' => 'en',
                'value' => '排序',
                'created_at' => '2020-04-20 20:00:53',
                'updated_at' => '2020-04-20 20:00:53',
            ),
            9 => 
            array (
                'id' => 10,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 4,
                'locale' => 'en',
                'value' => '分類',
                'created_at' => '2020-04-20 20:00:53',
                'updated_at' => '2020-04-20 20:00:53',
            ),
            10 => 
            array (
                'id' => 11,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 4,
                'locale' => 'en',
                'value' => '分類集',
                'created_at' => '2020-04-20 20:00:53',
                'updated_at' => '2020-04-20 20:00:53',
            ),
            11 => 
            array (
                'id' => 12,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 30,
                'locale' => 'en',
                'value' => 'Id',
                'created_at' => '2020-04-20 23:37:43',
                'updated_at' => '2020-04-20 23:37:43',
            ),
            12 => 
            array (
                'id' => 13,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 31,
                'locale' => 'en',
                'value' => '標題',
                'created_at' => '2020-04-20 23:37:43',
                'updated_at' => '2020-04-20 23:37:43',
            ),
            13 => 
            array (
                'id' => 14,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 32,
                'locale' => 'en',
                'value' => '商品描述',
                'created_at' => '2020-04-20 23:37:43',
                'updated_at' => '2020-04-20 23:37:43',
            ),
            14 => 
            array (
                'id' => 15,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 33,
                'locale' => 'en',
                'value' => '價格',
                'created_at' => '2020-04-20 23:37:43',
                'updated_at' => '2020-04-20 23:37:43',
            ),
            15 => 
            array (
                'id' => 16,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 34,
                'locale' => 'en',
                'value' => '上架於',
                'created_at' => '2020-04-20 23:37:43',
                'updated_at' => '2020-04-20 23:37:43',
            ),
            16 => 
            array (
                'id' => 17,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 35,
                'locale' => 'en',
                'value' => '是否開啟',
                'created_at' => '2020-04-20 23:37:43',
                'updated_at' => '2020-04-20 23:37:43',
            ),
            17 => 
            array (
                'id' => 18,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 36,
                'locale' => 'en',
                'value' => '創建於',
                'created_at' => '2020-04-20 23:37:43',
                'updated_at' => '2020-04-20 23:37:43',
            ),
            18 => 
            array (
                'id' => 19,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 37,
                'locale' => 'en',
                'value' => '更新於',
                'created_at' => '2020-04-20 23:37:43',
                'updated_at' => '2020-04-20 23:37:43',
            ),
            19 => 
            array (
                'id' => 20,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 38,
                'locale' => 'en',
                'value' => '圖片',
                'created_at' => '2020-04-20 23:37:43',
                'updated_at' => '2020-04-20 23:37:43',
            ),
            20 => 
            array (
                'id' => 21,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 39,
                'locale' => 'en',
                'value' => 'Cgy Id',
                'created_at' => '2020-04-20 23:37:43',
                'updated_at' => '2020-04-20 23:37:43',
            ),
            21 => 
            array (
                'id' => 22,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 40,
                'locale' => 'en',
                'value' => 'cgies',
                'created_at' => '2020-04-20 23:37:43',
                'updated_at' => '2020-04-20 23:37:43',
            ),
            22 => 
            array (
                'id' => 23,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 5,
                'locale' => 'en',
                'value' => '商品',
                'created_at' => '2020-04-20 23:37:43',
                'updated_at' => '2020-04-20 23:37:43',
            ),
            23 => 
            array (
                'id' => 24,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 5,
                'locale' => 'en',
                'value' => '商品集',
                'created_at' => '2020-04-20 23:37:43',
                'updated_at' => '2020-04-20 23:37:43',
            ),
            24 => 
            array (
                'id' => 25,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 41,
                'locale' => 'en',
                'value' => 'Id',
                'created_at' => '2020-04-21 00:05:19',
                'updated_at' => '2020-04-21 00:05:19',
            ),
            25 => 
            array (
                'id' => 26,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 42,
                'locale' => 'en',
                'value' => '頁面',
                'created_at' => '2020-04-21 00:05:19',
                'updated_at' => '2020-04-21 00:05:19',
            ),
            26 => 
            array (
                'id' => 27,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 43,
                'locale' => 'en',
                'value' => 'Mode',
                'created_at' => '2020-04-21 00:05:19',
                'updated_at' => '2020-04-21 00:05:19',
            ),
            27 => 
            array (
                'id' => 28,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 44,
                'locale' => 'en',
                'value' => '標題',
                'created_at' => '2020-04-21 00:05:19',
                'updated_at' => '2020-04-21 00:05:19',
            ),
            28 => 
            array (
                'id' => 29,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 45,
                'locale' => 'en',
                'value' => '位置',
                'created_at' => '2020-04-21 00:05:19',
                'updated_at' => '2020-04-21 00:05:19',
            ),
            29 => 
            array (
                'id' => 30,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 46,
                'locale' => 'en',
                'value' => 'ICON類別',
                'created_at' => '2020-04-21 00:05:19',
                'updated_at' => '2020-04-21 00:05:19',
            ),
            30 => 
            array (
                'id' => 31,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 47,
                'locale' => 'en',
                'value' => '次標題',
                'created_at' => '2020-04-21 00:05:19',
                'updated_at' => '2020-04-21 00:05:19',
            ),
            31 => 
            array (
                'id' => 32,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 48,
                'locale' => 'en',
                'value' => '內容',
                'created_at' => '2020-04-21 00:05:19',
                'updated_at' => '2020-04-21 00:05:19',
            ),
            32 => 
            array (
                'id' => 33,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 49,
                'locale' => 'en',
                'value' => '網址',
                'created_at' => '2020-04-21 00:05:19',
                'updated_at' => '2020-04-21 00:05:19',
            ),
            33 => 
            array (
                'id' => 34,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 50,
                'locale' => 'en',
                'value' => '網址替代文字',
                'created_at' => '2020-04-21 00:05:19',
                'updated_at' => '2020-04-21 00:05:19',
            ),
            34 => 
            array (
                'id' => 35,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 51,
                'locale' => 'en',
                'value' => '圖片',
                'created_at' => '2020-04-21 00:05:19',
                'updated_at' => '2020-04-21 00:05:19',
            ),
            35 => 
            array (
                'id' => 36,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 52,
                'locale' => 'en',
                'value' => '影片網址',
                'created_at' => '2020-04-21 00:05:19',
                'updated_at' => '2020-04-21 00:05:19',
            ),
            36 => 
            array (
                'id' => 37,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 53,
                'locale' => 'en',
                'value' => '替代文字',
                'created_at' => '2020-04-21 00:05:19',
                'updated_at' => '2020-04-21 00:05:19',
            ),
            37 => 
            array (
                'id' => 38,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 54,
                'locale' => 'en',
                'value' => 'Title Pos',
                'created_at' => '2020-04-21 00:05:19',
                'updated_at' => '2020-04-21 00:05:19',
            ),
            38 => 
            array (
                'id' => 39,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 55,
                'locale' => 'en',
                'value' => 'Q Mode',
                'created_at' => '2020-04-21 00:05:19',
                'updated_at' => '2020-04-21 00:05:19',
            ),
            39 => 
            array (
                'id' => 40,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 56,
                'locale' => 'en',
                'value' => 'I Mode',
                'created_at' => '2020-04-21 00:05:19',
                'updated_at' => '2020-04-21 00:05:19',
            ),
            40 => 
            array (
                'id' => 41,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 57,
                'locale' => 'en',
                'value' => '排序',
                'created_at' => '2020-04-21 00:05:19',
                'updated_at' => '2020-04-21 00:05:19',
            ),
            41 => 
            array (
                'id' => 42,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 58,
                'locale' => 'en',
                'value' => '是否開啟',
                'created_at' => '2020-04-21 00:05:19',
                'updated_at' => '2020-04-21 00:05:19',
            ),
            42 => 
            array (
                'id' => 43,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 59,
                'locale' => 'en',
                'value' => '創建於',
                'created_at' => '2020-04-21 00:05:19',
                'updated_at' => '2020-04-21 00:05:19',
            ),
            43 => 
            array (
                'id' => 44,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 60,
                'locale' => 'en',
                'value' => '更新於',
                'created_at' => '2020-04-21 00:05:19',
                'updated_at' => '2020-04-21 00:05:19',
            ),
            44 => 
            array (
                'id' => 45,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 7,
                'locale' => 'en',
                'value' => '網頁元素',
                'created_at' => '2020-04-21 00:05:19',
                'updated_at' => '2020-04-21 00:05:19',
            ),
            45 => 
            array (
                'id' => 46,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 7,
                'locale' => 'en',
                'value' => '網頁元素集',
                'created_at' => '2020-04-21 00:05:19',
                'updated_at' => '2020-04-21 00:05:19',
            ),
            46 => 
            array (
                'id' => 47,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 21,
                'locale' => 'en',
                'value' => '新增購物車',
                'created_at' => '2020-04-21 13:08:55',
                'updated_at' => '2020-04-21 13:08:55',
            ),
            47 => 
            array (
                'id' => 48,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 22,
                'locale' => 'en',
                'value' => '更新購物車',
                'created_at' => '2020-04-21 13:09:02',
                'updated_at' => '2020-04-21 13:09:02',
            ),
            48 => 
            array (
                'id' => 49,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 23,
                'locale' => 'en',
                'value' => '移除購物車',
                'created_at' => '2020-04-21 13:09:08',
                'updated_at' => '2020-04-21 13:09:08',
            ),
        ));
        
        
    }
}