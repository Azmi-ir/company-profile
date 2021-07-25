<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profil;
use App\Models\User;
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
        // \App\Models\User::factory(10)->create();
        DB::table('profil')->insert(
            [
                'alamat' => 'Pamulang Mas D1/37 Bambu Apus Kota Tanggerang Selatan',
                'telpon' => '08643747313',
                'email' => 'dwimitratunggalabadi@gmail.com',
                'facebook' => 'https://www.instagram.com/dwimitrapt/',
                'instagram' => 'https://www.instagram.com/dwimitrapt/',
            ]);

        DB::table('users')->insert(
        [
            'name' => 'Adminnistrator',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
        ]);
    }
}
