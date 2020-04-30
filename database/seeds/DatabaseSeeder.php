<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        //$this->call(UsersTableSeeder::class);
        //$this->call(CgiesTableSeeder::class);
        //$this->call(ItemsTableSeeder::class);
        //$this->call(OrdersTableSeeder::class);
        //$this->call(OrderItemTableSeeder::class);

        //安裝範例資料===============================
        $this->call(ExampleCgiesTableSeeder::class);
        $this->call(ExampleDataRowsTableSeeder::class);
        $this->call(ExampleDataTypesTableSeeder::class);
        $this->call(ExampleElementsTableSeeder::class);
        $this->call(ExampleItemsTableSeeder::class);
        $this->call(ExampleMenusTableSeeder::class);
        $this->call(ExampleMenuItemsTableSeeder::class);
        $this->call(ExamplePermissionsTableSeeder::class);
        $this->call(ExamplePermissionRoleTableSeeder::class);
        $this->call(ExampleRolesTableSeeder::class);
        $this->call(ExampleSettingsTableSeeder::class);
        $this->call(ExampleTranslationsTableSeeder::class);
        $this->call(ExampleUsersTableSeeder::class);
        //安裝範例資料結束===============================
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    }
}
