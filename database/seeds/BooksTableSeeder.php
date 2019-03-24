<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
       DB::table('books')->insert([
         'name'=>'菅井友香',
         'bookdetail_id'=> 3,
         'author_id'=> 5,
         'publisher_id'=>7
       ]);

       DB::table('books')->insert([
         'name'=>'上村莉奈',
         'bookdetail_id'=> 2,
         'author_id'=> 6,
         'publisher_id'=>8
       ]);
    }
}
