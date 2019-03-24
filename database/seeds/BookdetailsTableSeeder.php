<?php

use Illuminate\Database\Seeder;

class BookdetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
       DB::table('bookdetails')->insert([
         'isbn'=>'1111111111111',
         'published_date'=>\Carbon\Carbon::now(),
         'price'=>100
       ]);

       DB::table('bookdetails')->insert([
         'isbn'=>'2222222222222',
         'published_date'=>\Carbon\Carbon::now(),
         'price'=>200
       ]);

       DB::table('bookdetails')->insert([
         'isbn'=>'3333333333333',
         'published_date'=>\Carbon\Carbon::now(),
         'price'=>300
       ]);
     }
   }
