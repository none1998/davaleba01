<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
           'title' => Str::random(10),
           'year' => 2000,
           'description' => 'testforseeder',
            'rating' => 7.9,
            'image' => 'https://images-na.ssl-images-amazon.com/images/I/71rNJQ2g-EL._AC_SY741_.jpg'
        ]);

        DB::table('movies')->delete([
            'id' => 8
        ]);
    }
}
