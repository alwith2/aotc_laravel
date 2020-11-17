<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\User::factory()->count(50)->create();
        // \App\Models\Author::factory()->count(50)->create();
        // \App\Models\Genre::factory()->count(50)->create();
        \App\Models\Book::factory()->count(50)->create();

        // $bookCount = 100;
        // for($i = 1; $i <= $bookCount; $i++){
        //     DB::table('book_authors')->insert([
        //         'ref_book_id' => $i,
        //         'ref_author_id' => rand(1, 65)
        //     ]);
        //}

        // \App\Models\Checkout::factory()->count(50)->create();
    }
}
