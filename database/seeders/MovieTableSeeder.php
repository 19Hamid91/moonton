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
            [
                'name' => 'The Dark Knight',
                'slug' => 'The-dark-knight',
                'category' => 'Action',
                'video_url' => 'https://youtu.be/EXeTwQWrcwY?si=x_BsAdKWBJhBMZxC',
                'thumbnail' => 'https://m.media-amazon.com/images/I/51l5Z4OSyUL._AC_UF894,1000_QL80_.jpg',
                'rating' => 4.8,
                'is_featured' => 1,
            ],
            [
                'name' => 'Inception',
                'slug' => 'Inception',
                'category' => 'Sci-Fi',
                'video_url' => 'https://youtu.be/8hP9D6kZseM?si=nBNGjtFv5P6xe3Nq',
                'thumbnail' => 'https://m.media-amazon.com/images/I/91kFYg4fX3L._AC_UF894,1000_QL80_.jpg',
                'rating' => 4.7,
                'is_featured' => 1,
            ],
            [
                'name' => 'Interstellar',
                'slug' => 'Interstellar',
                'category' => 'Sci-Fi',
                'video_url' => 'https://youtu.be/zSWdZVtXT7E?si=0ttvTd4DsPRXAPUC',
                'thumbnail' => 'https://m.media-amazon.com/images/I/71n4POkvnlL._AC_UF894,1000_QL80_.jpg',
                'rating' => 4.6,
                'is_featured' => 0,
            ],
            [
                'name' => 'Fight Club',
                'slug' => 'Fight-club',
                'category' => 'Drama',
                'video_url' => 'https://youtu.be/qtRKdVHc-cE?si=yWzF2VcttQgdKtt5',
                'thumbnail' => 'https://m.media-amazon.com/images/I/7137H5pBdWL._AC_UF894,1000_QL80_.jpg',
                'rating' => 4.5,
                'is_featured' => 0,
            ],
            [
                'name' => 'Pulp Fiction',
                'slug' => 'Pulp-fiction',
                'category' => 'Crime',
                'video_url' => 'https://youtu.be/s7EdQ4FqbhY?si=d1U_KfJbs8_fKoeA',
                'thumbnail' => 'https://m.media-amazon.com/images/I/81DxtwZFBXL._AC_UF894,1000_QL80_.jpg',
                'rating' => 4.6,
                'is_featured' => 1,
            ],
        ];

        Movie::insert($movies);
    }
}
