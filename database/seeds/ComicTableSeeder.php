<?php

use Illuminate\Database\Seeder;

use App\Comic;

class ComicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $filmDati = config("comics");

        foreach ($filmDati as $key => $comic) {

            
           $fumetti = new Comic();

           $fumetti->title=$comic["title"];
           $fumetti->description=$comic["description"];
           $fumetti->thumb = $comic["thumb"] ;
           $fumetti->series=$comic["series"];
           $fumetti->price=str_replace(',','.',$comic["price"]);
           $fumetti->type=$comic["type"];
           $fumetti->save();
           
        }
    }
}
