<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Category;
class ModifiedNameToCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
           DB::table("categories")->delete();
           $categories  = [
            'DC', 'Marvel', 'Stars Wars', 'Mafalda', 
            'Mortadelo y filemón', 'Sin city', 'The Umbrella Academy', 'Manga'
        ];
           foreach ($categories as $category) {
            $c = new Category();
            $c->name = $category;
            $c->save();
        }
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table("categories")->delete();
        $categories  = [
            'motores', 'auto', 'electrodomésticos', 'libros', 
            'juegos', 'deporte', 'imobiles', 'moviles', 'mobiliario'
     ];
        foreach ($categories as $category) {
         $c = new Category();
         $c->name = $category;
         $c->save();
     
    }
}
}