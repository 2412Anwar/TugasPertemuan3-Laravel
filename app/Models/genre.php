<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    private $genres = [
        [
            'id' => 1,
            'name' => 'Fiksi',
            'description' => 'Buku karya imajinatif dan rekaan.'
        ],
        [
            'id' => 2,
            'name' => 'Non-Fiksi',
            'description' => 'Buku berdasarkan fakta dan filosofi kehidupan.'
        ],
        [
            'id' => 3,
            'name' => 'Teknologi',
            'description' => 'Buku seputar komputer dan pemrograman.'
        ],
        [
            'id' => 4,
            'name' => 'Sains',
            'description' => 'Buku ilmu pengetahuan alam dan antariksa.'
        ],
        [
            'id' => 5,
            'name' => 'Sejarah',
            'description' => 'Buku rekaman peristiwa penting masa lalu.'
        ]
    ];

    public function getGenres() {
        return $this->genres;
    }
}