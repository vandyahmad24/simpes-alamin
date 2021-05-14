<?php

namespace Database\Seeders;

use App\Models\Config;
use Illuminate\Database\Seeder;

class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $config = new Config;
        $config->konfig = "telp";
        $config->isi="+62896-5373-7300";
        $config->save();

        $config = new Config;
        $config->konfig = "email";
        $config->isi="alaminpabuaran@gmail.com";
        $config->save();

        $config = new Config;
        $config->konfig = "brosur";
        $config->isi="psb2021.png";
        $config->save();

        
    }
}
