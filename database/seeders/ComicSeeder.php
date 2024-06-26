<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
   
    public function run(): void
    {
        $comics= config("comics"); 
        foreach ($comics as $comic) {
            $newComic = new Comic();

            $newComic->title = $comic['title'];
            $newComic->description = $comic['description'];

            $newComic->thumb = $comic['thumb'];

            $newComic->price = $comic['price'];

            $newComic->series = $comic['series'];

            $newComic->sale_date = $comic['sale_date'];
            $newComic->type = $comic['type'];

            $newComic->artists = json_encode($comic['artists']);

            $newComic->writers = json_encode($comic['writers']);


            $newComic->save();





        }

        // $this->command->info(print_r($comics));

    }
}
