<?php

use Illuminate\Database\Seeder;
use App\Contact;
class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum. Suspendisse id neque a nibh mollis blandit. Quisque varius eros ac purus dignissim.',
            'address' => 'PO Box 16122 Collins Street West,Victoria 8007, United States. ',
            'phone' => '+123456789',
            'email' => 'noreplay@domain.com',
            'social_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum. Suspendisse id neque a nibh mollis blandit. Quisque varius eros ac purus dignissim.',
            'facebook' => 'https://facebook.com',
            'twitter' => 'https://twitter.com',
            'youtube' => 'https://youtube.com',
            'google' => 'https://googleplus.com',
            'linkedin' => 'https://linkedin.com',
            'instagram' => 'https://instagram.com',
        ]);
    }
}
