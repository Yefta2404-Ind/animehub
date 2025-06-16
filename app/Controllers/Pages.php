<?php
namespace App\Controllers;

class Pages extends BaseController
{
    /* ── DATA SEMENTARA ── */
    private array $anime = [
        'jujutsu-kaisen' => [
            'title'    => 'Jujutsu Kaisen',
            'img'      => 'jujutsu.jpg',
            'banner'   => 'jujutsu-banner.jpg',
            'genre'    => 'Action, Supernatural',
            'season'   => 'Fall 2020',
            'episodes' => 24,
            'studio'   => 'MAPPA',
            'score'    => 8.7,
            'synopsis' => 'Itadori Yuji menelan jari Sukuna dan harus berburu sisanya…'
        ],
        'one-piece' => [
            'title'=>'One Piece',
            'img'=>'OnePiece2.jpg',
            'banner'=>'onepiece-banner.jpg',
            'genre'=>'Adventure, Fantasy',
            'season'=>'1999 – sekarang',
            'episodes'=>1000,
            'studio'=>'Toei Animation',
            'score'=>8.8,
            'synopsis'=>'Luffy berburu harta karun legendaris One Piece…'
        ],
        'demon-slayer' => [
            'title'=>'Demon Slayer',
            'img'=>'DemonSlayer.jpg',
            'banner'=>'demonslayer-banner.jpg',
            'genre'=>'Action, Historical',
            'season'=>'Spring 2019',
            'episodes'=>26,
            'studio'=>'Ufotable',
            'score'=>8.6,
            'synopsis'=>'Kamado Tanjiro bertarung melawan iblis demi menyelamatkan adiknya…'
        ],
        'chainsaw-man' => [
            'title'=>'Chainsaw Man',
            'img'=>'Chainsaw.jpg',
            'banner'=>'chainsaw-banner.jpg',
            'genre'=>'Action, Gore',
            'season'=>'Fall 2022',
            'episodes'=>12,
            'studio'=>'MAPPA',
            'score'=>8.5,
            'synopsis'=>'Denji bergabung dengan pasukan Pemburu Iblis sebagai manusia‑gergaji…'
        ],
        'naruto' => [
            'title'=>'Naruto',
            'img'=>'Naruto.jpg',
            'banner'=>'naruto-banner.jpg',
            'genre'=>'Action, Ninja',
            'season'=>'2002 – 2007',
            'episodes'=>220,
            'studio'=>'Pierrot',
            'score'=>8.3,
            'synopsis'=>'Naruto bercita‑cita menjadi Hokage desa Konoha…'
        ],
        'bleach' => [
            'title'=>'Bleach',
            'img'=>'Bleach.jpg',
            'banner'=>'bleach-banner.jpg',
            'genre'=>'Action, Supernatural',
            'season'=>'2004 – 2012',
            'episodes'=>366,
            'studio'=>'Pierrot',
            'score'=>8.1,
            'synopsis'=>'Ichigo Kurosaki mendapatkan kekuatan Shinigami dan berperang melawan Hollow…'
        ],
        'ranma-half' => [
    'title'    => 'Ranma ½',
    'img'      => 'ranma.jpg',
    'banner'   => 'ranma-banner.jpg',
    'genre'    => 'Comedy, Martial Arts, Romance',
    'season'   => 'Spring 1989 – Spring 1992',
    'episodes' => 161,
    'studio'   => 'Studio Deen',
    'score'    => 7.8,
    'synopsis' => 'Ranma Saotome berubah menjadi perempuan saat terkena air dingin karena kutukan dari pelatihan bela diri di China. Komedi romantis penuh kekacauan pun dimulai.'
],

'attack-on-titan' => [
    'title'    => 'Attack on Titan',
    'img'      => 'aot.jpg',
    'banner'   => 'aot-banner.jpg',
    'genre'    => 'Action, Drama, Fantasy',
    'season'   => 'Spring 2013 – Fall 2023',
    'episodes' => 87,
    'studio'   => 'Wit Studio, MAPPA',
    'score'    => 9.0,
    'synopsis' => 'Manusia hidup dalam tembok untuk melindungi diri dari raksasa pemakan manusia. Eren Yeager bersumpah membasmi semua titan setelah tragedi menimpa ibunya.'
],

    ];
    /* ──────────────────── */

    /* ---------- HALAMAN UMUM ---------- */
    public function home()     { return view('layout/header').view('pages/home').view('layout/footer'); }
    public function about()    { return view('layout/header').view('pages/about').view('layout/footer'); }
    public function services() { return view('layout/header').view('pages/services').view('layout/footer'); }
    public function contact()  { return view('layout/header').view('pages/contact').view('layout/footer'); }

    /* ---------- DAFTAR ANIME ---------- */
    public function anime()
    {
        $list = [];
        foreach ($this->anime as $slug => $data) {
            $list[] = ['slug'=>$slug,'title'=>$data['title'],'img'=>$data['img']];
        }
        return view('layout/header')
             . view('pages/anime', ['animes'=>$list])
             . view('layout/footer');
    }

    /* ---------- DETAIL ---------- */
    public function detail(string $slug)
    {
        if (! isset($this->anime[$slug])) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Anime tidak ditemukan');
        }
        return view('layout/header')
             . view('pages/detail', ['anime'=>$this->anime[$slug]])
             . view('layout/footer');
    }
}
