<?php

use Illuminate\Database\Seeder;
use App\Education;
class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Education::create([
            'university_name' => 'university of design',
            'grad_title' => 'Bachelor degreee',
            'from' => '2014',
            'to' => '2018',
            'description' =>' Phasellus nec gravida purus. Aliquam ac enim vel ipsum consectetur vulputate. Duis quis feugiat neque. Pellentesque eleifend, nisi vel mattis vestibulum, est lacus pretium quam. '
        ]);
        Education::create([
            'university_name' => 'university of design',
            'grad_title' => 'Bachelor degreee',
            'from' => '2014',
            'to' => '2018',
            'description' =>' Phasellus nec gravida purus. Aliquam ac enim vel ipsum consectetur vulputate. Duis quis feugiat neque. Pellentesque eleifend, nisi vel mattis vestibulum, est lacus pretium quam. '
        ]);
        Education::create([
            'university_name' => 'university of design',
            'grad_title' => 'Bachelor degreee',
            'from' => '2014',
            'to' => '2018',
            'description' =>' Phasellus nec gravida purus. Aliquam ac enim vel ipsum consectetur vulputate. Duis quis feugiat neque. Pellentesque eleifend, nisi vel mattis vestibulum, est lacus pretium quam. '
        ]);
        Education::create([
            'university_name' => 'university of design',
            'grad_title' => 'Bachelor degreee',
            'from' => '2014',
            'to' => '2018',
            'description' =>' Phasellus nec gravida purus. Aliquam ac enim vel ipsum consectetur vulputate. Duis quis feugiat neque. Pellentesque eleifend, nisi vel mattis vestibulum, est lacus pretium quam. '
        ]);
    }
}
