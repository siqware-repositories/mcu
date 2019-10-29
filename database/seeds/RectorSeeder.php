<?php

use App\Rector;
use Illuminate\Database\Seeder;

class RectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rector::create([
            'name' => "Rector's name",
            'profile' => '../images/placeholder.png',
            'title' => "Rector's title",
            'content' => "Rector's content"
        ]);
    }
}
