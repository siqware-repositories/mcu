<?php

use App\Founder;
use Illuminate\Database\Seeder;

class FounderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Founder::create([
            'name' => "Founder's name",
            'profile' => '../images/placeholder.png',
            'title' => "Founder's title",
            'content' => "Founder's content"
        ]);
    }
}
