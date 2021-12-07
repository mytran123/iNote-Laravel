<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("notes")->insert([
            ["category" => "Work","title" => "Meeting","content" => "Meeting on monday at 8 o'clock"],
            ["category" => "Work","title" => "Case","content" => "Show case study today"],
            ["category" => "Learn","title" => "English","content" => "Learn english 3 days a week"],
            ["category" => "Family","title" => "Last week","content" => "This friday is my husband's birthday"],
            ["category" => "Friend","title" => "Drink","content" => "Going to drink coffee this weekend"],
            ["category" => "Friend","title" => "Shopping","content" => "Go shopping together"]
        ]);
    }
}
