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
        // $this->call(UsersTableSeeder::class);
        factory(App\Model\Category::class,10)->create();
        factory(App\Model\Information::class,20)->create();
        factory(App\Model\Question::class,15)->create();
    }
}
