<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Group;
use App\Models\Level;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Level::all() as $level){
            Group::create([
                'name' => 'prvý pólrok',
                'level_id' => $level->id,
            ]);
            Group::create([
                'name' => 'druhý pólrok',
                'level_id' => $level->id,
            ]);
        }
    }
}
