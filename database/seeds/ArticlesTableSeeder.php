<?php

use Illuminate\Database\Seeder;
use App\Models\Article;
class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        Article::truncate();

        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 5; $i++) {
            Article::created([
                'category_id' => $faker->numberBetween(1,9),
                'title' => $faker->sentence,
                'content' => $faker->paragraph
            ]);
        }
    }
}
