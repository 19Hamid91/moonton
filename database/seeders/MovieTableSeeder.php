<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Seeder;

class MovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies = [
            [
                'name' => 'The Shawshark Redemption',
                'slug' => 'The-shawshark-redemption',
                'category' => 'Drama',
                'video_url' => 'https://youtu.be/PLl99DlL6b4?si=1ZzUjpriR8lXjYAp',
                'thumbnail' => 'https://m.media-amazon.com/images/I/815qtzaP9iL._AC_UF894,1000_QL80_.jpg',
                'rating' => 4.3,
                'is_featured' => 1,
            ],
            [
                'name' => 'The Godfather',
                'slug' => 'The-godfather',
                'category' => 'Drama',
                'video_url' => 'https://youtu.be/UaVTIH8mujA?si=RBYS6kHcrAvvieZN',
                'thumbnail' => 'https://m.media-amazon.com/images/I/81fc+fWtALL._AC_UF894,1000_QL80_.jpg',
                'rating' => 4.5,
                'is_featured' => 0,
            ],
            [
                'name' => 'The Godfather: Part II',
                'slug' => 'The-godfather-part-ii',
                'category' => 'Drama',
                'video_url' => 'https://youtu.be/9O1Iy9od7-A?si=gU-ReF_fMwwqq55r',
                'thumbnail' => 'https://m.media-amazon.com/images/I/81a5y311AVL._AC_UF894,1000_QL80_.jpg',
                'rating' => 4.4,
                'is_featured' => 0,
            ],
        ];

        Movie::insert($movies);
    }
}
