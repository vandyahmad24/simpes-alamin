<?php

namespace Database\Seeders;

use App\Models\Banner;
use App\Models\Sejarah;
use Illuminate\Database\Seeder;

class SuperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $banner = new Banner;
        $banner->title="AL AMIN";
        $banner->subtitle="Sebuah Jalan Menuju Ketenangan";
        $banner->photo="aam.JPG";
        $banner->save();

        $banner = new Banner;
        $banner->title="AL AMIN";
        $banner->subtitle="Sebuah Jalan Menuju Ketenangan";
        $banner->photo="aam.JPG";
        $banner->save();

        $banner = new Banner;
        $banner->title="AL AMIN";
        $banner->subtitle="Kawan ber cengkrama, Jembatan Keakraban, Tali Persaudaraan";
        $banner->photo="pp.JPG";
        $banner->save();

        $sejarah = new Sejarah;
        $sejarah->title="SEJARAH PPQ AL AMIN";
        $sejarah->isi="PPQ Al Amin didirikan pada tanggal 20 Desember 1994 bertempat di Kelurahan Pabuwaran Purwokerto Utara. Cikal bakal dari pendirian pondok pesantren ini didahului oleh ide Bapak K. H. Drs. Ibnu Mukti, M.PdI dan didukung oleh keluarga besar Ibu Hj. Siti Aminah. Mula-mula hanya diadakan pengajian umum setiap malam Kamis di Musholla Nurul Barokah dan Musholla Baitul Muttaqin. Kemudian ada sebagian anak-anak dan remaja yang ingin belajar membaca Al Quran. Mereka belajar setiap selesai Sholat Maghrib.
        Terdapat banyak cerita lika-liku dibalik perjalanan berdirinya PPQ Al Amin sampai sekarang ini. Dimulai dari tahun 1992 ketika Abah Kyai beserta keluarga datang ke Purwokerto dari Jakarta karena Ibu Kyai baru diterima menjadi dosen di Fakultas Ekonomi UNSOED. Abah Kyai dan Ibu Kyai adalah sebutan lazim bagi para santri untuk memanggil K.H. Ibnu Mukti dan istrinya yang menjadi pengasuh sekaligus perintis PPQ Al Amin.
        <br><br>
        Abah Kyai dan keluarga awalnya tinggal di Sumampir sebelum di Pabuwaran. Di samping mendampingi Ibu Kyai di Purwokerto, beliau pun menyibukkan diri di jalan dakwah. Abah mendatangi mushola-mushola dan masjid untuk memberikan ceramah keagamaan, mengajar ngaji pada masyarakat. Sejak itulah beliau dikenal sebagai seorang ustadz dan seorang ulama. Ibu Hj. Siti Aminah, seorang jamaah mewakafkan sebidang tanah di Kelurahan Pabuwaran.
        <br><br>
        Pada tahun 1993, Abah dan keluarga pindah ke Kelurahan Pabuwaran. Awalnya mereka tinggal di sebuah rumah kecil, sedangkan tanah wakaf yang akan dibangun pondok pesantren masih berupa tanah kosong yang tidak rata dan ditumbuhi pepohonan secara alami.  Untuk membangun pondok, tanah wakaf tersebut harus diratakan dengan tanah yang didatangkan lebih dari sepuluh bak truk. Selanjutnya, pembangunan pondok dimulai dari pondok putra sedikit demi sedikit. Setelah lantai pertama pondok putra selesai dibangun, Abah sekeluarga pindah tinggal di dalamnya dan santri putra yang berasal dari daerah Purwokerto menghuni kamar di sebelahnya. Lalu, Abah bersama para santri membangun lantai dua dan tiga. Setelah pondok putra selesai dibangun, mereka lanjut membangun pondok putri pusat dan ndalem(rumah Abah yang ditinggali sekarang).
        <br><br>
        Akhirnya, pada tahun 1994 pondok selesai dibangun dan diberi nama Pondok Pesantren Al Quran Al Amin. Nama Al Amin sengaja diambil dari nama Siti Aminah dengan tujuan untuk mengenang jasa beliau (Azizi, 2010:9). Namun, pembangunan PPQ Al Amin tidak berhenti sampai di situ saja. Pembangunan bahkan masih terus berlangsung sampai sekarang karena jumlah santri terus bertambah dari tahun ke tahun. Dahulu PPQ Al Amin hanya memiliki santri berjumlah puluhan, tetapi kini sudah hampir mencapai 300 orang santri.
        ";
        $sejarah->save();
    }
}
