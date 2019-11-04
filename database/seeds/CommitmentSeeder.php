<?php

use App\Commitment;
use Illuminate\Database\Seeder;

class CommitmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Commitment::create([
            'type'=>'mission',
            'title'=>'Mission',
            'content'=>"Mission's Content"
        ]);
        Commitment::create([
            'type'=>'vision',
            'title'=>'Vision',
            'content'=>"Vision's Content"
        ]);
        Commitment::create([
            'type'=>'goal',
            'title'=>'Goal',
            'content'=>"Goal's Content"
        ]);

    }
}
