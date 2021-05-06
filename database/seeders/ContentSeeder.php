<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contents')->insert($this->getSeeds());
    }

    public function getSeeds()
    {
        return [
            [
                'title' => 'Review Honda Brio RS: Kecil-kecil Cabe Rawit!',
                'overview' => '',
                'content' => '',
                'image' => 'https://images.autofun.co.id/file1/233adee92f974f338c91be4e106a23ae_750x500.JPG',
                'type' => 'review',
                'writer_id' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'title' => 'Perbedaan Sunroof, Moonroof dan Panoramic Roof Pada Atap Mobil, Jangan Keliru!',
                'overview' => '',
                'content' => '',
                'image' => 'https://images.autofun.co.id/file1/c53ffac29de34773a35807035a3ec93c_428x240.jpg',
                'type' => 'review',
                'writer_id' => 2,
                'created_at' => Carbon::now()
            ],
            [
                'title' => 'Sketsa mobil: Wah, Modifikasi Honda City Hatchback di Atas Kertas Untuk Sumber Inspirasi',
                'overview' => '',
                'content' => '',
                'image' => 'https://images.autofun.co.id/file1/b363e0de0067472baf2d62d0d293fb42_428x240.jpeg',
                'type' => 'review',
                'writer_id' => 3,
                'created_at' => Carbon::now()
            ],

             [
                'title' => 'Paket Body Kit Toyota Corolla Cross 2021 Akan Meluncur Tahun ini, Bergaya Gazoo Racing',
                'image' => 'https://images.autofun.co.id/file1/93553da70243407bb56ca2795434eddd_300x200.jpg',
                'overview' => 'Toyota Corolla Cross 2021 dijadwalkan akan meluncur pada tahun ini untuk pasar domestik Jepang. ' .
                         'Sebelum peluncuran, ternyata telah beredar rekaan body kit yang dapat mengubah tampilannya menjadi ala GR (Gazoo Racing). ' .
                         'Hasilnya Toyota Corolla Cross 2021 makin menjadi gagah.Tampilan Toyota Cross 2021 dengan body kitBody kit atau aksesoris untuk Toyota Corolla Cross 2021 ini merupakan hasil desain grafis dari seorang desainer asal Jepang, dan bukan bagian dari internal Toyota. Karena bisa menyulap ',
                 'content' => '',
                'type' => 'news',
                'writer_id' => 1,
                 'created_at' => Carbon::now()
            ],

            [
                'title' => 'Harga Toyota Fortuner Diskon PPNBM, Siap Rebut Pasar Mitsubishi Pajero Sport dan Isuzu MU-X',
                'image' => 'https://images.autofun.co.id/file1/22b3bfaf458840f889c9167763dc9c90_300x200.jpg',
                'overview' => 'Pemerintah telah memutuskan untuk memperluas cakupan kendaraan yang mendapat insentif PPNBM, hingga kapasitas 2.500 cc dan penggerak 4X4. Perluasan ini pun hanya menambah dua model saja yaitu Toyota Kijang Innova dan Fortuner 2021 yang memenuhi syarat minimum local purchase 60 persen. Dengan harga yang lebih murah, bisakah Fortuner merebut pasar Mitsubishi Pajero Sport dan Isuzu MU-X sekaligus?Sebelum lebih jauh membahas soal spesifikasi, kita perlu tahu berapa harga Toyota Fortuner 2021 dengan ',
                'content' => '',
                'type' => 'news',
                'writer_id' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'title' => 'Cantik dan Seksi, Wanita-Wanita Thailand Bikin Suasana d BIMS 2021 Memanas',
                'image' => 'https://images.autofun.co.id/file1/0c079f4bb7914f0da51d34009d4ff8c1_300x200.jpg',
                'overview' => 'Wanita cantik yang bertugas sebagai Sales Promtion Girl atau biasa di sebut Usher selalu menjadi bagian terpenting dalam ajang pameran. Seperti halnya pada Bangkok International Motor Show (BIMS) 2021, SPG tidak hanya menjadi ‘pemanis’, juga bertugas menarik animo pengunjung hingga transaksi pembelian mobil.Penampilan wanita-wanita cantik Thailand sebagai SPG dalam Bangkok International Motor Show (BIMS) 2021 yang berlangsung sejak 24 Maret hingga 4 April dapat anda lihat dari hasil ',
                'content' => '',
                'type' => 'news',
                'writer_id' => 2,
                'created_at' => Carbon::now()
            ],
            [
                'title' => 'Makin Murah, Mazda CX-3 SPORT Kini Dapatkan Mesin 1.5 Liter, Harga Rp339,9 Juta!',
                'image' => 'https://images.autofun.co.id/file1/8bae6cea705c499684d42ec2ceb67b42_300x200.jpg',
                'overview' => 'Hari ini (29/3) PT Eurokars Motor Indonesia (PT. EMI), distributor resmi merek Mazda di Indonesia, memperkenalkan varian terbaru crossover SUV-nya, New Mazda CX-3 SPORT 1.5 L. Menjadi varian baru yang dijual dengan harga lebih murah. Harga Mazda CX-3 SPORT 1.5L dibanderol dengan harga Rp339,9 Juta (on the road DKI Jakarta).Harga Mazda CX-3 SPORT 1.5L dibanderol mulai Rp339,9 jutaKini PT EMI menawarkan New Mazda CX-3 dalam dua varian yaitu, PRO dengan mesin SKYACTIV-G 2.0 dan varian SPORT dengan ',
                'content' => '',
                'type' => 'news',
                'writer_id' => 3,
                'created_at' => Carbon::now()
            ]
        ];
    }
}
