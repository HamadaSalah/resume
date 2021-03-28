<?php

use Illuminate\Database\Seeder;
use App\Languages;
class LangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Languages::create([
            'name' => 'English Experienced',
            'percentage' => '80'
        ]);
        Languages::create([
            'name' => 'English Experienced',
            'percentage' => '80'
        ]);
        Languages::create([
            'name' => 'English Experienced',
            'percentage' => '80'
        ]);
        Languages::create([
            'name' => 'English Experienced',
            'percentage' => '80'
        ]);
    }
}
