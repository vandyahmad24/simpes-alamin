<?php

namespace Database\Seeders;

use App\Models\Angkatan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AngkatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('angkatan')->delete();
        for($i=2000; $i<=2040; $i++){
            $angkatan = new Angkatan;
            $angkatan->angkatan=$i;
            $angkatan->save();
        }
        
    }
}
