<?php

use Illuminate\Database\Seeder;
use App\Home;
class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Home::create([
            'name' => 'Andrew Smith',
            'job_title' => 'PHP Laravel Developer',
            'img' => ['no-image.png'],
        ]);

    }
}
