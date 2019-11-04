<?php

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
        $this->call(RectorSeeder::class);
        $this->call(FounderSeeder::class);
        $this->call(HistorySeeder::class);
        $this->call(GallerySeeder::class);
        $this->call(CommitmentSeeder::class);
    }
}
