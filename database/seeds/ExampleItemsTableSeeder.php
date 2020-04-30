<?php

use Illuminate\Database\Seeder;

class ExampleItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('items')->delete();
        
        \DB::table('items')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'aspernatur',
                'desc' => '<p>Nostrum veritatis aspernatur quam consequatur et velit. Id repellendus fugit tempore incidunt amet. Neque repellendus molestiae aperiam recusandae libero quo.</p>',
                'price' => 2646,
                'sell_at' => NULL,
                'enabled' => 1,
                'created_at' => '2020-04-20 20:26:00',
                'updated_at' => '2020-04-21 00:16:14',
                'pic_url' => 'http://store.test/storage/images/items/9.jpg',
                'cgy_id' => 3,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'autem',
                'desc' => '<p>Odit est ipsum occaecati et culpa. Consequatur ipsa et ut rerum error. Aut laborum sequi sint. Quisquam repellendus exercitationem voluptatem odit.</p>',
                'price' => 4929,
                'sell_at' => NULL,
                'enabled' => 1,
                'created_at' => '2020-04-20 20:26:00',
                'updated_at' => '2020-04-21 00:13:14',
                'pic_url' => 'http://store.test/storage/images/items/1.jpg',
                'cgy_id' => 5,
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'ipsa',
                'desc' => '<p>Numquam totam consequatur impedit et perferendis nihil maxime. Facere placeat voluptate consequatur non rem veniam tenetur. Reiciendis quasi ea et non ut porro. Est maiores suscipit earum sed consequatur illum.</p>',
                'price' => 9886,
                'sell_at' => NULL,
                'enabled' => 1,
                'created_at' => '2020-04-20 20:26:00',
                'updated_at' => '2020-04-21 00:13:32',
                'pic_url' => 'http://store.test/storage/images/items/10.jpg',
                'cgy_id' => 5,
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'aliquam',
                'desc' => '<p>Vel corporis vero maiores. Tempora culpa est consequuntur aliquam. Accusamus dolorum est soluta et ipsa aut nam.</p>',
                'price' => 2995,
                'sell_at' => NULL,
                'enabled' => 1,
                'created_at' => '2020-04-20 20:26:00',
                'updated_at' => '2020-04-21 00:13:41',
                'pic_url' => 'http://store.test/storage/images/items/11.jpg',
                'cgy_id' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'vero',
                'desc' => '<p>Quam accusamus non in eveniet expedita quaerat commodi vel. Vel excepturi consequatur illum non consequatur doloremque. Numquam ut et dolores ipsa qui. Enim nihil sed deserunt animi magnam minus. Sequi quaerat omnis eos dolorum eos sed architecto.</p>',
                'price' => 5874,
                'sell_at' => NULL,
                'enabled' => 1,
                'created_at' => '2020-04-20 20:26:00',
                'updated_at' => '2020-04-21 00:13:51',
                'pic_url' => 'http://store.test/storage/images/items/12.jpg',
                'cgy_id' => 5,
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'quisquam',
                'desc' => '<p>Reiciendis numquam omnis inventore ut et debitis. Voluptates iste aut provident sit. Tenetur minus sit odio voluptatem et. Voluptatem doloremque magni sequi.</p>',
                'price' => 7818,
                'sell_at' => NULL,
                'enabled' => 1,
                'created_at' => '2020-04-20 20:26:00',
                'updated_at' => '2020-04-21 00:14:01',
                'pic_url' => 'http://store.test/storage/images/items/13.jpg',
                'cgy_id' => 6,
            ),
            6 => 
            array (
                'id' => 7,
                'title' => 'ullam',
                'desc' => '<p>Rem sed saepe omnis soluta facilis necessitatibus molestias. Sunt illo quia dolorem ipsum dolorem suscipit esse. Ipsa consectetur omnis commodi veniam minus.</p>',
                'price' => 9701,
                'sell_at' => NULL,
                'enabled' => 1,
                'created_at' => '2020-04-20 20:26:00',
                'updated_at' => '2020-04-21 00:14:09',
                'pic_url' => 'http://store.test/storage/images/items/14.jpg',
                'cgy_id' => 4,
            ),
            7 => 
            array (
                'id' => 8,
                'title' => 'laudantium',
                'desc' => '<p>Voluptatum delectus omnis qui recusandae. Et nisi laboriosam velit cum eius aliquid. Qui mollitia voluptas quo et ut sit assumenda. Necessitatibus minima veritatis aut voluptatibus magnam consequuntur vel voluptas.</p>',
                'price' => 1201,
                'sell_at' => NULL,
                'enabled' => 1,
                'created_at' => '2020-04-20 20:26:00',
                'updated_at' => '2020-04-21 00:14:19',
                'pic_url' => 'http://store.test/storage/images/items/15.jpg',
                'cgy_id' => 6,
            ),
            8 => 
            array (
                'id' => 9,
                'title' => 'placeat',
                'desc' => '<p>Quos error in sint sunt. Minima eaque impedit voluptas est fugiat odio sequi. Rem porro aliquid excepturi odio. Occaecati esse autem veniam aut aliquam et id.</p>',
                'price' => 9679,
                'sell_at' => NULL,
                'enabled' => 1,
                'created_at' => '2020-04-20 20:26:00',
                'updated_at' => '2020-04-21 00:14:28',
                'pic_url' => 'http://store.test/storage/images/items/16.jpg',
                'cgy_id' => 4,
            ),
            9 => 
            array (
                'id' => 10,
                'title' => 'eveniet',
                'desc' => '<p>Commodi ea sit explicabo. Explicabo cupiditate facere aliquam suscipit doloremque et modi. Quia maiores veritatis ut vero eos. Beatae quod perferendis quia eligendi ducimus velit aliquid quisquam.</p>',
                'price' => 3062,
                'sell_at' => NULL,
                'enabled' => 1,
                'created_at' => '2020-04-20 20:26:00',
                'updated_at' => '2020-04-21 00:14:36',
                'pic_url' => 'http://store.test/storage/images/items/17.jpg',
                'cgy_id' => 1,
            ),
            10 => 
            array (
                'id' => 11,
                'title' => 'minima',
                'desc' => '<p>Vel molestiae placeat laboriosam et sequi voluptatem ipsa quaerat. Qui voluptatem sit voluptatem labore velit beatae quaerat. Culpa et minima eum perspiciatis. Possimus velit officiis maiores nostrum quia est ipsum omnis. Ratione aut repellat at qui ut laudantium.</p>',
                'price' => 1576,
                'sell_at' => NULL,
                'enabled' => 1,
                'created_at' => '2020-04-20 20:26:00',
                'updated_at' => '2020-04-21 00:14:47',
                'pic_url' => 'http://store.test/storage/images/items/18.jpg',
                'cgy_id' => 2,
            ),
            11 => 
            array (
                'id' => 12,
                'title' => 'vero',
                'desc' => '<p>Iure sit dolorem architecto sint. Molestias sunt aspernatur nemo unde facilis et totam. Sunt est minus saepe minima. Autem possimus et nesciunt omnis.</p>',
                'price' => 8820,
                'sell_at' => NULL,
                'enabled' => 1,
                'created_at' => '2020-04-20 20:26:00',
                'updated_at' => '2020-04-21 00:14:57',
                'pic_url' => 'http://store.test/storage/images/items/19.jpg',
                'cgy_id' => 6,
            ),
            12 => 
            array (
                'id' => 13,
                'title' => 'voluptas',
                'desc' => '<p>Omnis eveniet adipisci sunt. Enim est incidunt ut sint incidunt. Quaerat omnis odio repellendus deserunt ipsam aut hic. Nobis voluptatum provident aspernatur numquam nihil dolorem.</p>',
                'price' => 9803,
                'sell_at' => NULL,
                'enabled' => 1,
                'created_at' => '2020-04-20 20:26:00',
                'updated_at' => '2020-04-21 00:15:05',
                'pic_url' => 'http://store.test/storage/images/items/2.jpg',
                'cgy_id' => 4,
            ),
            13 => 
            array (
                'id' => 14,
                'title' => 'cumque',
                'desc' => '<p>Asperiores asperiores voluptates possimus. Est facilis culpa nostrum quia. Commodi sed sit autem.</p>',
                'price' => 5257,
                'sell_at' => NULL,
                'enabled' => 1,
                'created_at' => '2020-04-20 20:26:00',
                'updated_at' => '2020-04-21 00:15:16',
                'pic_url' => 'http://store.test/storage/images/items/20.jpg',
                'cgy_id' => 6,
            ),
            14 => 
            array (
                'id' => 15,
                'title' => 'distinctio',
                'desc' => '<p>Sunt minima eos quibusdam et eos consequatur illum. Voluptatem voluptatem qui expedita totam sequi. Rem ut qui dolores cumque aut sapiente excepturi. Hic perferendis sunt consequuntur aut repellat vel.</p>',
                'price' => 9409,
                'sell_at' => NULL,
                'enabled' => 1,
                'created_at' => '2020-04-20 20:26:00',
                'updated_at' => '2020-04-21 00:15:25',
                'pic_url' => 'http://store.test/storage/images/items/3.jpg',
                'cgy_id' => 6,
            ),
            15 => 
            array (
                'id' => 16,
                'title' => 'sit',
                'desc' => '<p>Quos voluptatem eos ea natus. Architecto vero magnam laborum voluptas ratione.</p>',
                'price' => 5749,
                'sell_at' => NULL,
                'enabled' => 1,
                'created_at' => '2020-04-20 20:26:00',
                'updated_at' => '2020-04-21 00:15:32',
                'pic_url' => 'http://store.test/storage/images/items/4.jpg',
                'cgy_id' => 5,
            ),
            16 => 
            array (
                'id' => 17,
                'title' => 'harum',
                'desc' => '<p>Quis doloribus labore perspiciatis dicta eum vel nesciunt. Qui consectetur laboriosam nobis debitis. Accusamus et in sed quis fuga nisi.</p>',
                'price' => 9964,
                'sell_at' => NULL,
                'enabled' => 1,
                'created_at' => '2020-04-20 20:26:00',
                'updated_at' => '2020-04-21 00:15:41',
                'pic_url' => 'http://store.test/storage/images/items/5.jpg',
                'cgy_id' => 2,
            ),
            17 => 
            array (
                'id' => 18,
                'title' => 'aliquam',
                'desc' => '<p>Sunt eligendi ad eaque itaque quasi soluta. Laudantium commodi et error voluptatem. Est voluptate voluptatem sit tenetur.</p>',
                'price' => 7202,
                'sell_at' => NULL,
                'enabled' => 1,
                'created_at' => '2020-04-20 20:26:00',
                'updated_at' => '2020-04-21 00:15:50',
                'pic_url' => 'http://store.test/storage/images/items/6.jpg',
                'cgy_id' => 2,
            ),
            18 => 
            array (
                'id' => 19,
                'title' => 'et',
                'desc' => '<p>Molestiae in aut vel et qui mollitia. Omnis atque est amet. Suscipit ut tenetur eum qui occaecati.</p>',
                'price' => 5322,
                'sell_at' => NULL,
                'enabled' => 1,
                'created_at' => '2020-04-20 20:26:00',
                'updated_at' => '2020-04-21 00:15:58',
                'pic_url' => 'http://store.test/storage/images/items/7.jpg',
                'cgy_id' => 2,
            ),
            19 => 
            array (
                'id' => 20,
                'title' => 'molestiae',
                'desc' => '<p>Nihil quidem harum assumenda voluptatem. Id est corrupti assumenda dicta commodi alias molestiae. Quidem ullam rerum est nemo laborum. Ut consectetur eius et voluptatibus harum sed reprehenderit eveniet.</p>',
                'price' => 7542,
                'sell_at' => NULL,
                'enabled' => 1,
                'created_at' => '2020-04-20 20:26:00',
                'updated_at' => '2020-04-21 00:16:06',
                'pic_url' => 'http://store.test/storage/images/items/8.jpg',
                'cgy_id' => 2,
            ),
        ));
        
        
    }
}