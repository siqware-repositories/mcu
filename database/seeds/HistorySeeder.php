<?php

use App\History;
use Illuminate\Database\Seeder;

class HistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        History::create([
            'title'=>"History's title",
            'content'=>"History's content"
        ]);
    }
}
