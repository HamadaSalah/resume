<?php

use Illuminate\Database\Seeder;
use App\Portfolio;
class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Portfolio::create([
            'title' => 'The Flavour Restaurant',
            'category' => 'webdesign and Development',
            'description' => 'Kale chips lomo biodiesel stumptown Godard Tumblr, mustache sriracha tattooed cray aute slow-carb placeat delectus. Letterpress asymmetrical fanny pack art party est pour-over skateboard anim quis, ',
            'img' => ["no-image.png"],
        ]);
        Portfolio::create([
            'title' => 'The Flavour Restaurant',
            'category' => 'webdesign and Development',
            'description' => 'Kale chips lomo biodiesel stumptown Godard Tumblr, mustache sriracha tattooed cray aute slow-carb placeat delectus. Letterpress asymmetrical fanny pack art party est pour-over skateboard anim quis, ',
            'img' => ["no-image.png"],
        ]);
        Portfolio::create([
            'title' => 'The Flavour Restaurant',
            'category' => 'webdesign and Development',
            'description' => 'Kale chips lomo biodiesel stumptown Godard Tumblr, mustache sriracha tattooed cray aute slow-carb placeat delectus. Letterpress asymmetrical fanny pack art party est pour-over skateboard anim quis, ',
            'img' => ["no-image.png"],
        ]);
        Portfolio::create([
            'title' => 'The Flavour Restaurant',
            'category' => 'webdesign and Development',
            'description' => 'Kale chips lomo biodiesel stumptown Godard Tumblr, mustache sriracha tattooed cray aute slow-carb placeat delectus. Letterpress asymmetrical fanny pack art party est pour-over skateboard anim quis, ',
            'img' => ["no-image.png"],
        ]);
    }
}
