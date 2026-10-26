<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = [
            ['title' => 'Bumi', 'description' => 'Novel petualangan dunia paralel.', 'price' => 95000, 'author_id' => 1],
            ['title' => 'Laskar Pelangi', 'description' => 'Kisah inspiratif anak-anak Belitung.', 'price' => 85000, 'author_id' => 2],
            ['title' => 'Bumi Manusia', 'description' => 'Kisah sejarah perjuangan Minke.', 'price' => 120000, 'author_id' => 3],
            ['title' => 'Supernova', 'description' => 'Novel fiksi ilmiah romansa.', 'price' => 90000, 'author_id' => 4],
            ['title' => 'Garis Waktu', 'description' => 'Kumpulan cerita dan puisi.', 'price' => 75000, 'author_id' => 5],
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}