<?php

use Illuminate\Database\Seeder;

class ExampleElementsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('elements')->delete();
        
        \DB::table('elements')->insert(array (
            0 => 
            array (
                'id' => 1,
                'page' => 'shop',
                'mode' => NULL,
                'title' => '用Laravel建立<br>電子商務網站',
                'position' => 'slider',
                'icon' => NULL,
                'subtitle' => NULL,
                'content' => 'Competently reintermediate user friendly scenarios after global synergy.
Globally build compelling niche markets rather than bricks-and-clicks alignments. Continually revolutionize interactive strategic theme.',
                'url' => '#',
                'url_txt' => NULL,
                'pic' => 'images/elements/13.jpg',
                'video' => NULL,
                'alt' => NULL,
                'title_pos' => NULL,
                'q_mode' => NULL,
                'i_mode' => NULL,
                'sort' => 0,
                'enabled' => 1,
                'created_at' => '2020-04-21 13:24:19',
                'updated_at' => '2020-04-21 13:24:19',
            ),
            1 => 
            array (
                'id' => 2,
                'page' => 'shop',
                'mode' => NULL,
                'title' => '你只需要<br>Laravel5.8 從入門到實務',
                'position' => 'slider',
                'icon' => NULL,
                'subtitle' => NULL,
                'content' => 'Competently reintermediate user friendly scenarios after global synergy.
Globally build compelling niche markets rather than bricks-and-clicks
alignments. Continually revolutionize interactive strategic theme.',
                'url' => '#',
                'url_txt' => NULL,
                'pic' => 'images/elements/14.jpg',
                'video' => NULL,
                'alt' => NULL,
                'title_pos' => NULL,
                'q_mode' => NULL,
                'i_mode' => NULL,
                'sort' => 1,
                'enabled' => 1,
                'created_at' => '2020-04-21 13:25:15',
                'updated_at' => '2020-04-21 13:25:15',
            ),
            2 => 
            array (
                'id' => 3,
                'page' => 'shop',
                'mode' => NULL,
                'title' => 'We Create<br>diff. Layouts',
                'position' => 'slider',
                'icon' => NULL,
                'subtitle' => NULL,
                'content' => 'Competently reintermediate user friendly scenarios after global synergy.
Globally build compelling niche markets rather than bricks-and-clicks
alignments. Continually revolutionize interactive strategic theme.',
                'url' => '#',
                'url_txt' => NULL,
                'pic' => 'images/elements/15.jpg',
                'video' => NULL,
                'alt' => NULL,
                'title_pos' => NULL,
                'q_mode' => NULL,
                'i_mode' => NULL,
                'sort' => 2,
                'enabled' => 1,
                'created_at' => '2020-04-21 13:25:59',
                'updated_at' => '2020-04-21 13:25:59',
            ),
            3 => 
            array (
                'id' => 4,
                'page' => 'shop',
                'mode' => NULL,
                'title' => 'We Create<br>your Website',
                'position' => 'slider',
                'icon' => NULL,
                'subtitle' => NULL,
                'content' => 'Competently reintermediate user friendly scenarios after global synergy.
Globally build compelling niche markets rather than bricks-and-clicks
alignments. Continually revolutionize interactive strategic theme.',
                'url' => '#',
                'url_txt' => NULL,
                'pic' => 'images/elements/16.jpg',
                'video' => NULL,
                'alt' => NULL,
                'title_pos' => NULL,
                'q_mode' => NULL,
                'i_mode' => NULL,
                'sort' => 3,
                'enabled' => 1,
                'created_at' => '2020-04-21 13:26:42',
                'updated_at' => '2020-04-21 13:26:42',
            ),
            4 => 
            array (
                'id' => 5,
                'page' => 'shop',
                'mode' => NULL,
                'title' => 'We Create<br>your Home',
                'position' => 'slider',
                'icon' => NULL,
                'subtitle' => NULL,
                'content' => 'Competently reintermediate user friendly scenarios after global synergy.
Globally build compelling niche markets rather than bricks-and-clicks
alignments. Continually revolutionize interactive strategic theme.',
                'url' => '#',
                'url_txt' => NULL,
                'pic' => 'images/elements/17.jpg',
                'video' => NULL,
                'alt' => NULL,
                'title_pos' => NULL,
                'q_mode' => NULL,
                'i_mode' => NULL,
                'sort' => 4,
                'enabled' => 1,
                'created_at' => '2020-04-21 13:27:00',
                'updated_at' => '2020-04-21 13:27:42',
            ),
        ));
        
        
    }
}