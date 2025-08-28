<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RackSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('racks')->insert([
            ['code' => 'A1', 'location' => 'Rak 1 - Novel'],
            ['code' => 'B1', 'location' => 'Rak 2 - Komik'],
            ['code' => 'C1', 'location' => 'Rak 3 - Sains'],
        ]);
    }
}
