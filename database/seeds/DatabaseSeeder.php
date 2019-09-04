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
        $this->call(password_resetsSeeder::class);
        $this->call(game_userSeeder::class);
        $this->call(ThrowSeeder::class);
        $this->call(GameSeeder::class);
        $this->call(UserSeeder::class);
    }
}