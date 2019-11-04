<?php

use App\Gallery;
use App\GalleryDetail;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gallery = Gallery::create([
            'user_id' => 1,
            'title' => 'Corporation title',
            'type' => "corporation",
            'status' => true
        ]);
        GalleryDetail::create([
            'gallery_id' => $gallery->id,
            'path' => '../images/placeholder.png',
        ]);
    }
}
