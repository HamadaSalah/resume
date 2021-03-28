<?php

use Illuminate\Database\Seeder;
use App\Blog;
class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Blog::create([
            'name' => 'This is a standard post with a preview image',
            'category' => 'Web Design',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'img' => ['no-image.png'],
        ]);
        Blog::create([
            'name' => 'This is a standard post with a preview image',
            'category' => 'Web Design',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'img' => ['no-image.png'],
        ]);
        Blog::create([
            'name' => 'This is a standard post with a preview image',
            'category' => 'Web Design',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'img' => ['no-image.png'],
        ]);
        Blog::create([
            'name' => 'This is a standard post with a preview image',
            'category' => 'Web Design',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'img' => ['no-image.png'],
        ]);
    }
}
