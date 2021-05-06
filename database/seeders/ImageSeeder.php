<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert($this->getSeeds());
    }

    private function getSeeds(): array
    {
        return [
            [
                'imageable_id' => 1,
                'imageable_type' => 'App\Models\Car',
                'url' => 'https://images.autofun.co.id/file1/9d237d3019e24d7fb5548b8587d42e0c_1072x604.jpg',
                'created_at' => Carbon::now(),
            ], [
                'imageable_id' => 1,
                'imageable_type' => 'App\Models\Car',
                'url' => 'https://images.autofun.co.id/file1/75ddf38354954390a360fddf97f9b649_1072x604.jpg',
                'created_at' => Carbon::now(),
            ], [
                'imageable_id' => 1,
                'imageable_type' => 'App\Models\Car',
                'url' => 'https://images.autofun.co.id/file1/56870437a28f49ff9f483cdad18c61f4_1072x604.jpg',
                'created_at' => Carbon::now(),
            ],
            [
                'imageable_id' => 2,
                'imageable_type' => 'App\Models\Car',
                'url' => 'https://images.autofun.co.id/file1/9a996fdea005465491c254a4f2c4591f_1072x604.jpg',
                'created_at' => Carbon::now(),
            ], [
                'imageable_id' => 2,
                'imageable_type' => 'App\Models\Car',
                'url' => 'https://images.autofun.co.id/file1/d0fd7f76d4404d33a53758dac5897cb4_1072x604.jpg',
                'created_at' => Carbon::now(),
            ], [
                'imageable_id' => 2,
                'imageable_type' => 'App\Models\Car',
                'url' => 'https://images.autofun.co.id/file1/1d1b591a38664e3480a056ed2a0fedbb_1072x604.jpg',
                'created_at' => Carbon::now(),
            ],
        ];
    }
}
