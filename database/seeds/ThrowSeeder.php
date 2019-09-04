<?php

use App\Throw;
use Illuminate\Database\Seeder;

class ThrowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Throw::class, 10)->create();
    }
}