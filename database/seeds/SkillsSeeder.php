<?php

use Illuminate\Database\Seeder;
use App\Skills;
class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Skills::create([
            'name' => 'Film Editing',
            'years' => '3',
            'percentage' => '80',
        ]);
        Skills::create([
            'name' => 'Film Editing',
            'years' => '3',
            'percentage' => '80',
        ]);
        Skills::create([
            'name' => 'Film Editing',
            'years' => '3',
            'percentage' => '80',
        ]);
        Skills::create([
            'name' => 'Film Editing',
            'years' => '3',
            'percentage' => '80',
        ]);

    }
}
