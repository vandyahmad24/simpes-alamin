<?php

namespace Database\Factories;

use App\Models\Angkatan;
use App\Models\Santri;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class SantriFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Santri::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $jk=['laki-laki','perempuan'];
        $pondok = ['pusat','prompong','purwanegara'];
        // User
        return [
            'tempat_lahir' => $this->faker->city(),
            'tanggal_lahir' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'tgl_masuk' => now(),
            'alamat' => $this->faker->address(),
            'anak_ke' => rand(1,3),
            'riwayat_penyakit'=>null,
            'ukuran_kaos'=>'xl',
            'jenis_kelamin'=> $jk[rand(0,1)],
            'nip' => $this->faker->postcode,
            'telp' => $this->faker->phoneNumber,
            'pondok' => $pondok[rand(0,2)],
            'tahun_keluar' => null,
            'status' => rand(0,1),
            'id_angkatan' => Angkatan::all()->random()->id,
            'id_user' => User::all()->random()->id,
        ];
    }
}
