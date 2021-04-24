<?php

namespace Database\Seeders;

use Database\Seeders\demo\demoTestSeeder;
use Database\Seeders\Project\ProjectDetailSeeder;
use Database\Seeders\Project\ProjectListSeeder;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(demoTestSeeder::class);
    }
}
