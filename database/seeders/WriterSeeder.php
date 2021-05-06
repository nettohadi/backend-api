<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('writers')->insert($this->getSeeds());
    }

    public function getSeeds()
    {
        return [
            [
                'id' => 1,
                'name' => 'Dhoni',
                'photo' => 'https://www.autofun.co.id/dist/id/images/Dhoni.1a4361.jpg',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 2,
                'name' => 'Yongki Sanjaya',
                'photo' => 'https://www.autofun.co.id/dist/id/images/Brodin.3f93a3.jpg',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 3,
                'name' => 'Budi',
                'photo' => 'https://www.autofun.co.id/dist/id/images/Budi.e6f8a3.png',
                'created_at' => Carbon::now()
            ]
        ];
    }
}
