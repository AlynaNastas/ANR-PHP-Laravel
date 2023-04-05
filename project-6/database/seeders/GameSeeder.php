<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     
        DB::table('games')->insert(
         [   
            [
                'name' => "Tic tac toe",
                'platform' =>"All platforms",
            ],
            [
                'name' => "Tetris",
                'platform' =>"All platforms",
            ],
            [
                'name' => "Pac-Man",
                'platform' =>"All platforms",
            ],
            [
                'name' => "Track & Field",
                'platform' =>"All platforms",
            ],
         ]
        );
    }
}
