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
        // dùng factory tạo user ảo để test import, export excel
        factory(\App\User::class, 20)->create();
    }
}
