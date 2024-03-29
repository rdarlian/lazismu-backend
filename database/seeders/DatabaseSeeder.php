<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Cabang;
use App\Models\Coa;
use App\Models\Coadebit;
use App\Models\Coakredit;
use App\Models\Frontoffice;
use App\Models\Kasbank;
use App\Models\Kasbesar;
use Illuminate\Database\Seeder;

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
        
        \App\Models\Cabang::factory()->create([
                'name' => "Lazismu",
            ]);
        // \App\Models\User::factory()->create([
        //         'name' => 'Admin',
        //         'email' => 'admin@lazismu.com',
        //         'cabang_id' => 1,
        //         'role' => 1,
        //         'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password

        //     ]);
        

        // Cabang::factory(5)->create();
        // Coa::factory(12)->create();
        // Frontoffice::factory(10)->create();
        // Kasbank::factory(8)->create();
        // Kasbesar::factory(10)->create();
        }
}
