<?php

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i=0; $i<20 ; $i++)
        {
           $title= $faker->unique()->sentence(6);
            Post::create([
                'title'=> $title,
                'slug'=> str_slug($title ,'-'), 
                'body'=>$faker->text(300),

            ]);
        }
    }
}
