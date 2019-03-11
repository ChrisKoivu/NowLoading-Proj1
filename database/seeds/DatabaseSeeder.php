<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(App\User::class, 10)->create();
        $this->call(SurveysTableSeeder::class);
        $this->call(QuestionsTableSeeder::class);
        $this->call(ResponsesTableSeeder::class);
        $this->call(QuestionSurveyTableSeeder::class);




    }
}
