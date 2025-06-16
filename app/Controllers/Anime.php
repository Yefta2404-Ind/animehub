<?php


// app/Controllers/Anime.php
namespace App\Controllers;

class Anime extends BaseController
{
    private $animeList = [
        'jujutsu-kaisen' => [
            'title' => 'Jujutsu Kaisen',
            'genre' => 'Action, Supernatural',
            'season' => 'Fall 2020',
            'episodes' => 24,
            'synopsis' => 'Cerita tentang dunia di mana roh terkutuk muncul...',
            'img' => 'jujutsu.jpg',
            'trailer' => 'https://www.youtube.com/embed/xyz123abc', // ganti dengan ID asli
        ],
        'one-piece' => [
            'title' => 'One Piece',
            'genre' => 'Adventure, Fantasy',
            'season' => 'Summer 1999',
            'episodes' => 1000,
            'synopsis' => 'Luffy berpetualang menjadi Raja Bajak Laut...',
            'img' => 'OnePiece2.jpg',
            'trailer' => 'https://www.youtube.com/embed/op456def', // ganti dengan ID asli
        ],
        // Tambahkan anime lainnya
    ];

    public function index()
    {
        return view('pages/anime');
    }

    public function detail($slug)
    {
        if (!array_key_exists($slug, $this->animeList)) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Anime not found.");
        }

        $data['anime'] = $this->animeList[$slug];
        return view('pages/detail', $data);
    }
}
