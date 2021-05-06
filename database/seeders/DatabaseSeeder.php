<?php

namespace Database\Seeders;

use Carbon\Carbon;
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
       $this->call([BrandSeeder::class]);
       $this->call([CarSeeder::class]);
       $this->call([ContentSeeder::class]);
       $this->call([WriterSeeder::class]);
        $this->call([ImageSeeder::class]);
    }

}
