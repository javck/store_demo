<?php

use Illuminate\Database\Seeder;

class ExampleCgiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cgies')->delete();
        
        \DB::table('cgies')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'ex',
                'desc' => 'Aut sit doloribus culpa ratione. Quia molestias iusto numquam quos voluptatem. Quia magnam dignissimos dicta. Esse culpa pariatur laboriosam ut recusandae labore sed.',
                'enabled' => 1,
                'created_at' => '2020-04-20 20:20:00',
                'updated_at' => '2020-04-20 20:22:31',
                'pic' => 'images/cgies/10.jpg',
                'sort' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'voluptatum',
                'desc' => 'Aut nostrum mollitia eius quisquam est. Vel saepe officiis quis vero officiis harum. Eaque sint porro voluptatem perspiciatis quia. Impedit facilis quos veritatis repellat.',
                'enabled' => 1,
                'created_at' => '2020-04-20 20:20:00',
                'updated_at' => '2020-04-20 20:23:33',
                'pic' => 'images/cgies/14.jpg',
                'sort' => 0,
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'ullam',
                'desc' => 'Quam doloremque iste qui illo. Consequatur quisquam facilis nihil est placeat eum provident. Eveniet voluptates sapiente esse beatae doloremque fugiat dolorem.',
                'enabled' => 1,
                'created_at' => '2020-04-20 20:20:00',
                'updated_at' => '2020-04-20 20:23:43',
                'pic' => 'images/cgies/15.jpg',
                'sort' => 0,
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'aut',
                'desc' => 'Esse et rerum adipisci nihil placeat debitis in. Dolore error excepturi fugiat impedit. Molestias dolorem quo quisquam quas.',
                'enabled' => 1,
                'created_at' => '2020-04-20 20:20:00',
                'updated_at' => '2020-04-20 20:23:50',
                'pic' => 'images/cgies/17.jpg',
                'sort' => 0,
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'similique',
                'desc' => 'Qui repellendus sed asperiores architecto. Dolores aut rerum quasi suscipit rem molestiae deleniti. Asperiores qui sit tempora.',
                'enabled' => 1,
                'created_at' => '2020-04-20 20:20:00',
                'updated_at' => '2020-04-20 20:23:58',
                'pic' => 'images/cgies/19.jpg',
                'sort' => 0,
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'velit',
                'desc' => 'Maxime sed sequi vero est qui. Harum voluptas minus quae possimus. Tempora consequatur ipsam illum qui occaecati.',
                'enabled' => 1,
                'created_at' => '2020-04-20 20:20:00',
                'updated_at' => '2020-04-20 20:24:05',
                'pic' => 'images/cgies/21.jpg',
                'sort' => 0,
            ),
        ));
        
        
    }
}