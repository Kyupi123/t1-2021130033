<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cat = [
            'sci-fi', 'novel', 'history', 'biography', 'romance', 'education', 'culinary',
            'comic',
        ];

        $faker = \Faker\Factory::create();

        for($i = 0; $i < 25; $i++) {
            $isbn = $faker->isbn13();
            $judul = $faker->sentence(4);
            $halaman = $faker->numberBetween(20, 450);
            $kategori = $faker->randomElement($cat);
            $penerbit = $faker->sentence(2);
            $created_at = $faker->dateTimeBetween('-10 years', 'now');

            DB::table('books')->insert([
                'isbn'=>$isbn,
                'judul'=>$judul,
                'halaman'=>$halaman,
                'kategori'=>$kategori,
                'penerbit'=>$penerbit,
                'created_at'=>$created_at,
                'updated_at'=>$created_at,
            ]);
        }
    }
}
