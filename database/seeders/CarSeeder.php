<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars')->insert($this->getSeeds());
    }

    private function getSeeds(): array
    {
        return [
            [
                'name' => 'Mitsubishi Xpander',
                'image' => 'https://images.autofun.co.id/file1/b77249519c40417fa2d0d235215f670c_404x268.jpg',
                'min_price' => 220.80,
                'max_price' => 278.10,
                'group' => 'SUV',
                'popularity' => 100,
                'built_year' => 2020,
                'brand_id' => 4,
                'created_at' => Carbon::now(),
                'body_type' => 'mvp',
                'fuel' => 'petroleum',
                'segmen' => 'segmen c',
                'power' => 104,
                'transmission' => 'manual'
            ],
            [
                'name' => 'Honda Brio',
                'image' => 'https://images.autofun.co.id/file1/6a2567ed106240bc9870c25c8e69e17e_404x268.jpg',
                'min_price' => 149.00,
                'max_price' => 200.20,
                'group' => 'LCGC',
                'popularity' => 99,
                'built_year' => 2019,
                'brand_id' => 3,
                'created_at' => Carbon::now(),
                'body_type' => 'hatchback',
                'fuel' => 'petroleum',
                'segmen' => 'segmen a',
                'power' => 90,
                'transmission' => 'automatic'
            ],
            [
                'name' => 'Wuling Boujun 310',
                'image' => 'https://images.autofun.co.id/file1/bcabfe66e19e4eba894b48d753a9e3a1_404x268.jpg',
                'min_price' => 260.0,
                'max_price' => 378.0,
                'group' => 'MVP',
                'popularity' => 98,
                'built_year' => 2020,
                'brand_id' => 7,
                'created_at' => Carbon::now(),
                'body_type' => 'hatchback',
                'fuel' => 'petroleum',
                'segmen' => 'segmen b',
                'power' => 87,
                'transmission' => 'automatic'
            ],
            [
                'name' => 'Honda Civic',
                'image' => 'https://images.autofun.co.id/file1/52519bfbe96d4d13852f87a3166fb3fd_404x268.jpg',
                'min_price' => 5330,
                'max_price' => 0,
                'group' => 'Sedan',
                'popularity' => 97,
                'built_year' => 2021,
                'brand_id'  => 3,
                'created_at' => Carbon::now(),
                'body_type' => 'sedan',
                'fuel' => 'petroleum',
                'segmen' => 'segmen c',
                'power' => 173,
                'transmission' => 'automatic'
            ],
            [

                'name' => 'Daihatsu Terios',
                'image' => 'https://images.autofun.co.id/file1/39d786f009cf4feca7d952fefcc321ce_404x268.jpg',
                'min_price' => 214.5,
                'max_price' => 267.5,
                'group' => 'SUV',
                'popularity' => 96,
                'built_year' => 2021,
                'brand_id'  => 2,
                'created_at' => Carbon::now(),
                'body_type' => 'suv',
                'fuel' => 'diesel',
                'segmen' => 'segmen b',
                'power' => 104,
                'transmission' => 'manual'
            ],
            [
                'name' => 'Honda WRV',
                'image' => 'https://images.autofun.co.id/file1/f9bcee4b25e948de87e7c48013cdb39c_404x268.jpg',
                'min_price' => 250.0,
                'max_price' => 288.0,
                'group' => 'SUV',
                'popularity' => 95,
                'built_year' => 2019,
                'brand_id'  => 3,
                'created_at' => Carbon::now(),
                'body_type' => 'suv',
                'fuel' => 'petroleum',
                'segmen' => 'segmen b',
                'power' => 90,
                'transmission' => 'automatic'
            ],
            [
                'name' => 'Toyota Avanza',
                'image' => 'https://images.autofun.co.id/file1/8a4a22443a5547ff9e47c7567d0fbf38_404x268.jpg',
                'min_price' => 189.0,
                'max_price' => 216.0,
                'group' => 'MVP',
                'popularity' => 94,
                'built_year' => 2020,
                'brand_id' => 1,
                'created_at' => Carbon::now(),
                'body_type' => 'mvp',
                'fuel' => 'petroleum',
                'segmen' => 'segmen b',
                'power' => 97,
                'transmission' => 'manual'
            ],
            [
                'name' => 'Toyota Rush',
                'image' => 'https://images.autofun.co.id/file1/3c311b3a2bdd4a1892137b535dc2ffad_404x268.jpg',
                'min_price' => 240.0,
                'max_price' => 260.0,
                'group' => 'SUV',
                'popularity' => 93,
                'built_year' => 2020,
                'brand_id' => 1,
                'created_at' => Carbon::now(),
                'body_type' => 'mvp',
                'fuel' => 'petroleum',
                'segmen' => 'segmen b',
                'power' => 97,
                'transmission' => 'manual'
            ],
            [
                'name' => 'Suzuki Vitarra Brezza',
                'image' => 'https://images.autofun.co.id/file1/0c97a4a966cb4b0c95f09fc7426c467e_404x268.jpg',
                'min_price' => 220.0,
                'max_price' => 278.0,
                'group' => 'SUV',
                'popularity' => 92,
                'built_year' => 2020,
                'brand_id' => 5,
                'created_at' => Carbon::now(),
                'body_type' => 'mvp',
                'fuel' => 'petroleum',
                'segmen' => 'segmen b',
                'power' => 97,
                'transmission' => 'manual'
            ],
            [
                'name' => 'Toyota Kijang Innova',
                'image' => 'https://images.autofun.co.id/file1/a77c3c96962b4a238c7170312f408fc2_404x268.jpg',
                'min_price' => 339.60,
                'max_price' => 442.90,
                'group' => 'MVP',
                'popularity' => 91,
                'built_year' => 2020,
                'brand_id' => 1,
                'created_at' => Carbon::now(),
                'body_type' => 'mvp',
                'fuel' => 'petroleum',
                'segmen' => 'segmen b',
                'power' => 97,
                'transmission' => 'manual'
            ],
            [
                'name' => 'Toyota Agya',
                'image' => 'https://images.autofun.co.id/file1/2057c57d5885434ab2f4a903c10378a0_404x268.jpg',
                'min_price' => 143.80,
                'max_price' => 169.29,
                'group' => 'LCGC',
                'popularity' => 90,
                'built_year' => 2020,
                'brand_id' => 1,
                'created_at' => Carbon::now(),
                'body_type' => 'hatchback',
                'fuel' => 'petroleum',
                'segmen' => 'segmen a',
                'power' => 88,
                'transmission' => 'manual'
            ],
            [
                'name' => 'Toyota Calya',
                'image' => 'https://images.autofun.co.id/file1/3b93b0b378db40febd0088ba87fc041d_404x268.jpg',
                'min_price' => 148.19,
                'max_price' => 166.69,
                'group' => 'LCGC',
                'popularity' => 89,
                'built_year' => 2020,
                'brand_id' => 1,
                'created_at' => Carbon::now(),
                'body_type' => 'mvp',
                'fuel' => 'petroleum',
                'segmen' => 'segmen b',
                'power' => 97,
                'transmission' => 'manual'
            ],
            [
                'name' => 'Daihatsu Ayla',
                'image' => 'https://images.autofun.co.id/file1/173f20c7263140c2bf645720af8776b6_404x268.jpg',
                'min_price' => 103.30,
                'max_price' => 161.05,
                'group' => 'LCGC',
                'popularity' => 88,
                'built_year' => 2020,
                'brand_id' => 2,
                'created_at' => Carbon::now(),
                'body_type' => 'hatchback',
                'fuel' => 'petroleum',
                'segmen' => 'segmen a',
                'power' => 88,
                'transmission' => 'manual'
            ],
            [
                'name' => 'Karimun Wagon R',
                'image' => 'https://images.autofun.co.id/file1/6988dcd88b0348e786f960c8763eb1e1_404x268.jpg',
                'min_price' => 122.00,
                'max_price' => 152.50,
                'group' => 'LCGC',
                'popularity' => 87,
                'built_year' => 2020,
                'brand_id' => 5,
                'created_at' => Carbon::now(),
                'body_type' => 'mvp',
                'fuel' => 'petroleum',
                'segmen' => 'segmen a',
                'power' => 88,
                'transmission' => 'manual'
            ],
        ];
    }
}
