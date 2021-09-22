<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Category;
use Faker\Generator as Faker;

class PostsTableSeeder extends Seeder
{
    
        public function run(Faker $faker) 
    {


        $categoryList = [
            'turismo',
            'politica',
            'attualità',
            'ambiente',
            'sport',
            'cultura'
        ];

        
        $listOfCategoryID = [];  

        foreach($categoryList as $category) {
            $categoryObject = new Category();
            $categoryObject->name = $category;
            $categoryObject->save();
            $listOfCategoryID[] = $categoryObject->id;
        }

        for ($i = 0; $i < 50; $i++){

            $bookObject = new Post();
            $bookObject->username = $faker->word(1);  
            $bookObject->post_text = $faker->paragraph(2);
            $bookObject->post_img = $faker->imageUrl(480, 360, 'posts', true);

            $randCategoryKey = array_rand($listOfCategoryID, 1);
            $categoryID = $listOfCategoryID[$randCategoryKey];
            $bookObject->category_id = $categoryID;
            $bookObject->save();
        }
    }
}
