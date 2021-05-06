<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert($this->getSeeds());
    }

    private function getSeeds(): array {
        return [
            [
                'image' => 'https://images.autofun.co.id/file1/2a6bbafdda9447e58c78a9c0a41eb6d1_100x100.jpg',
                'name' => 'Toyota',
                'desc' => 'Toyota Motor Corporation merupakan produsen mobil asal Jepang yang menjadi salah satu penghasil mobil terbesar di dunia saat ini. Produsen mobil ini berpusat di Toyota, Aichi. Tidak hanya memproduksi mobil dengan merek Toyota, perusahaan ini juga memproduksi Lexus dan Scion, Daihatsu dan Hino, dan memiliki sebagian kecil saham Subaru dan Isuzu.',
                'created_at' => Carbon::now(),
                'updated_at' => null
            ],
            [
                'image' => 'https://images.autofun.co.id/file1/5be8aab61f1d4c9f9e15c5359b2475c0_100x100.jpg',
                'name' => 'Daihatsu',
                'desc' => 'Siapa yang tidak kenal dengan brand mobil Daihatsu? Brand mobil yang satu ini memang sudah sangat familiar dengan para pengguna mobil di Indonesia. Daihatsu Motor Co., Ltd. sendiri merupakan salah satu produsen mobil tertua di Jepang. Produsen mobil kenamaan ini pernah dibentuk ulang pada tahun 1951 silam. Kemudian pada tahun 1960-an, Daihatsu melebarkan sayapnya di dunia otomotif dengan mulai mengekspor mobil ke pasar Eropa. Tetapi sayangnya, ketika itu penjualan mobil Daihatsu di Eropa tidak begitu baik. Pada bulan Februari tahun 1992, Daihatsu juga memasarkan mobil-mobil buatannya di wilayah Amerika Utara. Pada tahun 2007, tercatat bahwa produk Daihatsu yang terjual di Eropa adalah sebanyak 58.000 unit.',
                'created_at' => Carbon::now(),
                'updated_at' => null
            ],
            [
                'image' => 'https://images.autofun.co.id/file1/367b878f0d9e4e4aa7faf3f949c8b329_100x100.jpg',
                'name' => 'Honda',
                'desc' => 'Honda memulai perjalanannya di industri otomotif Indonesia pada tahun 1973. Ketika itu, merek Honda dipegang oleh PT. Prospect Motor, yang menjual mobil Honda. Seiring berjalannya waktu, perusahaan tersebut mulai memproduksi mobil di bawah nama PT. Imora Honda. Model yang pertama kali diproduksi ialah Honda Civic dan Honda Accord. Melihat besarnya respons masyarakat Indonesia, Honda akhirnya melakukan beberapa pengembangan Honda Motor Co. Ltd melakukan kerjasama dengan PT. Prospect Motor dan menjadi PT. Honda Prospect Motor (HPM).',
                'created_at' => Carbon::now(),
                'updated_at' => null
            ],
            [
                'image' => 'https://images.autofun.co.id/file1/fe19a4bb915d4884862242b2ba8b7942_100x100.jpg',
                'name' => 'Mitsubishi',
                'desc' => 'Di kalangan pecinta otomotif, merek mobil Mitsubishi memang sudah tidak asing lagi. Banyak yang belum tahu bahwa produsen mobil asal Jepang ini pertama kali didirikan sebagai perusahaan pelayaran oleh Yataro Iwasaki pada tahun 1870 silam. Perusahaan berlogo tiga berlian ini kemudian mulai beralih ke industri otomotif. Di Indonesia, nama Mitsubishi pertama kali dibawa oleh PT. Marwa Motors pada tahun 1970. Pada tahun 1973, perusahaan ini kemudian mengubah namanya menjadi PT. Krama Yudha Tiga Berlian Motor (KTB).',
                'created_at' => Carbon::now(),
                'updated_at' => null
            ],
            [
                'image' => 'https://images.autofun.co.id/file1/92710dcdf8274386aa42f19a4010ee38_100x100.jpg',
                'name' => 'Suzuki',
                'desc' => 'Saat mendengar nama Suzuki, sebagian besar masyarakat Indonesia pasti sudah tidak merasa asing lagi. Suzuki merupakan salah satu produsen otomotif asal Jepang yang juga cukup sukses di Indonesia. Seperti yang kita tahu, Suzuki tidak hanya memproduksi mobil, tetapi juga memproduksi sepeda motor dan mesin untuk keperluan maritim. Di Tanah Air, perjalanan Suzuki dimulai dari perakitan dan penjualan motor pada tahun 1969 silam. Saat itu, perusahaan Suzuki di Indonesia bernama PT. Indohero Steel & Engineering Company (ISEI).',
                'created_at' => Carbon::now(),
                'updated_at' => null
            ],
            [
                'image' => 'https://images.autofun.co.id/file1/c7040b8b1ede4cc9b9180aad2937f253_100x100.jpg',
                'name' => 'Nissan',
                'desc' => 'PT. Nissan Motor Indonesia mulai berdiri pada tahun 2001. Perusahaan ini mulai beroperasi dalam bidang penjualan, distribusi, juga suku cadang resmi Nissan, sekaligus menjalankan layanan purna jual di Indonesia. PT. Nissan Motor Indonesia yang merupakan bagian dari Nissan Motor Corporation Ltd., memiliki peran penting dalam terus meningkatkan kekuatan brand dan penjualan dan menguasai 8% pangsa pasar global dan secara berkelanjutan meningkatkan laba operasional perusahaan. Nissan di Indonesia memang menghadirkan rangkaian produk yang kompetitif dengan segmen kendaraan terlengkap',
                'created_at' => Carbon::now(),
                'updated_at' => null
            ],
            [
                'image' => 'https://images.autofun.co.id/file1/2d60a8740a914fa29cfb051a84bd2ac3_100x100.jpg',
                'name' => 'Wuling',
                'desc' => 'Wuling berhasil menjadi salah satu produsen kenamaan di Indonesia setelah menghadirkan produk-produk mobil yang dipenuhi fitur canggih, tetapi dengan banderol harga yang terjangkau. Di Indonesia sendiri, PT. SAIC General Motors Wuling (SGMW) Motor Indonesia lebih dikenal dengan sebutan Wuling Motors, selaku Agen Pemegang Merek Wuling. ',
                'created_at' => Carbon::now(),
                'updated_at' => null
            ],
            [
                'image' => 'https://images.autofun.co.id/file1/d855a3d230724fb997bb7e5b925edf58_100x100.jpg',
                'name' => 'Datsun',
                'desc' => 'Datsun merupakan merek mobil yang dimiliki oleh Nissan Motor Company. Datsun digunakan sebagai merek dari produk mobil Nissan yang diekspor tahun 1958 sampai 1986. Pada tahun 2013, Datsun diluncurkan kembali dengan menyasar segmen LCGC. Nama Datsun juga cukup terkenal di Indonesia pada zamannya, dengan merilis mobil pick-up Datsun 620 (Datsun 1500). Penggunaan nama Datsun untuk produk Nissan yang dipasarkan secara global sempat diputuskan untuk diberhentikan. Hal ini bertujuan untuk memperkuat nama Nissan sebagai produsen mobilnya. Untuk pasar Amerika Serikat, keputusan ini diumumkan pada tahun 1981.',
                'created_at' => Carbon::now(),
                'updated_at' => null
            ]
        ];}
}
