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
            
        ]);

        DB::table('question_survey')->insert([
            'survey_id' => 1,
            'question_id' => 2,
            
        ]);

        DB::table('question_survey')->insert([
            'survey_id' => 1,
            'question_id' => 3,
           
        ]);

        DB::table('question_survey')->insert([
            'survey_id' => 1,
            'question_id' => 4,
            
        ]);

        DB::table('question_survey')->insert([
            'survey_id' => 2,
            'question_id' => 5,
            
        ]);

        DB::table('question_survey')->insert([
            'survey_id' => 2,
            'question_id' => 6,
            
        ]);

        DB::table('question_survey')->insert([
            'survey_id' => 2,
            'question_id' => 7,
            
        ]);

        DB::table('question_survey')->insert([
            'survey_id' => 3,
            'question_id' => 8,
           
        ]);

        DB::table('question_survey')->insert([
            'survey_id' => 3,
            'question_id' => 9,
            
        ]);

        DB::table('question_survey')->insert([
            'survey_id' => 4,
            'question_id' => 10,
                    ]);

        DB::table('question_survey')->insert([
            'survey_id' => 4,
            'question_id' => 11,
            
        ]);

        DB::table('question_survey')->insert([
            'survey_id' => 4,
            'question_id' => 12,
            
        ]);

        DB::table('question_survey')->insert([
            'survey_id' => 5,
            'question_id' => 13,
            
        ]);

        DB::table('question_survey')->insert([
            'survey_id' => 5,
            'question_id' => 14,
            
        ]);

        DB::table('question_survey')->insert([
            'survey_id' => 5,
            'question_id' => 15,
            
        ]);
    }
}
