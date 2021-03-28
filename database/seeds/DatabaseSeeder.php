<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminSeeder::class);
        $this->call(HomeSeeder::class);
        $this->call(AboutSeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(SettingsSeeder::class);
        $this->call(EducationSeeder::class);
        $this->call(ExperienceSeeder::class);
        $this->call(KnowledgeSeeder::class);
        $this->call(LangSeeder::class);
        $this->call(PortfolioSeeder::class);
        $this->call(SkillsSeeder::class);
        $this->call(BlogSeeder::class);
        // $this->call(UsersTableSeeder::class);
    }
}
