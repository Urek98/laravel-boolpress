<?php

use Illuminate\Database\Seeder;
use App\Post;
use Faker\Generator as Faker;

class PostsTableSeeder extends Seeder
{
    
        public function run(Faker $faker) 
    {

        for ($i = 0; $i < 50; $i++){

            $bookObject = new Post();
            $bookObject->username = $faker->word(1);  
            $bookObject->post_text = $faker->paragraph(2);
            $bookObject->post_img = $faker->imageUrl(480, 360, 'posts', true);
            $bookObject->save();
        }
    }
}
