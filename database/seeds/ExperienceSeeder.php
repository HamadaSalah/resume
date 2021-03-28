<?php

use Illuminate\Database\Seeder;
use App\Experience;
class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Experience::create([
            'company_name' => 'Ace Advertising',
            'job_title' => 'Project Manager',
            'from' => '2014',
            'to' => '2018',
            'description'=>' Phasellus nec gravida purus. Aliquam ac enim vel ipsum consectetur vulputate. Duis quis feugiat neque. Pellentesque eleifend, nisi vel mattis vestibulum, est lacus pretium quam. '
        ]);
        Experience::create([
            'company_name' => 'Ace Advertising',
            'job_title' => 'Project Manager',
            'from' => '2014',
            'to' => '2018',
            'description'=>' Phasellus nec gravida purus. Aliquam ac enim vel ipsum consectetur vulputate. Duis quis feugiat neque. Pellentesque eleifend, nisi vel mattis vestibulum, est lacus pretium quam. '
        ]);
        Experience::create([
            'company_name' => 'Ace Advertising',
            'job_title' => 'Project Manager',
            'from' => '2014',
            'to' => '2018',
            'description'=>' Phasellus nec gravida purus. Aliquam ac enim vel ipsum consectetur vulputate. Duis quis feugiat neque. Pellentesque eleifend, nisi vel mattis vestibulum, est lacus pretium quam. '
        ]);
        Experience::create([
            'company_name' => 'Ace Advertising',
            'job_title' => 'Project Manager',
            'from' => '2014',
            'to' => '2018',
            'description'=>' Phasellus nec gravida purus. Aliquam ac enim vel ipsum consectetur vulputate. Duis quis feugiat neque. Pellentesque eleifend, nisi vel mattis vestibulum, est lacus pretium quam. '
        ]);
    }
}
