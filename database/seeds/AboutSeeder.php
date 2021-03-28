<?php

use Illuminate\Database\Seeder;
use App\About;
class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
            'name' => 'Andrew smith',
            'email' => 'Andrew@gmail.com',
            'phone' => '(202)8877877777',
            'dateOfBirth' => '23 Feb 1986',
            'address' => 'Address: PO Box 16122 Collins Street West, Victoria, USA.',
            'nationality' => 'United States',
            'profileText' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum. Suspendisse id neque a nibh mollis blandit.',
            'resumeFile' => 'file.pdf',
        ]);

    }
}
