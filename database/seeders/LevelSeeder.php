<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Level;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Level::create([
            'name' => 'Prvý ročník',
        ]);
        Level::create([
            'name' => 'Druhý ročník',
        ]);
        Level::create([
            'name' => 'Tretí ročník',
        ]);
        Level::create([
            'name' => 'Stvrtý ročník',
        ]);
        Level::create([
            'name' => 'Piaty ročník',
        ]);
    }
}
