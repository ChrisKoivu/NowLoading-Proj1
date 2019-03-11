<?php

use Illuminate\Database\Seeder;

class QuestionSurveyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('question_survey')->insert([
            'survey_id' => 1,
            'question_id' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('question_survey')->insert([
            'survey_id' => 1,
            'question_id' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('question_survey')->insert([
            'survey_id' => 1,
            'question_id' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('question_survey')->insert([
            'survey_id' => 1,
            'question_id' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('question_survey')->insert([
            'survey_id' => 2,
            'question_id' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('question_survey')->insert([
            'survey_id' => 2,
            'question_id' => 6,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('question_survey')->insert([
            'survey_id' => 2,
            'question_id' => 7,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);
    }
}
