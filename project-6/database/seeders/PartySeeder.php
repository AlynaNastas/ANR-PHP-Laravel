<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('parties')->insert(
            [
            [
                'name' => "Mago Casual",
                'rules' => " A Flag reaching the opposite end of the board may still be eliminated by an opposing piece occupying a square adjacent to the one reached by the Flag. In order to win, the Flag should at least be two square or two ahead of any opposing piece"
            ],
            [
                'name' => "The Gamers",
                'rules' => "As the game progresses, challenges are made resulting in the elimination of soldiers. A 'challenge' is made when a soldier moves into the same square occupied by an opposing soldier. 
                When a challenge is made the following rules of elimination apply"
            ],
            [
                'name' => "Game Maste",
                'rules' => "A player is allowed to move only one piece at a time."
            ],
            [
                'name' => "Proexpert",
                'rules' =>"Only a Private can eliminate the Spy."
            ],
            ]
        );
    }
}
