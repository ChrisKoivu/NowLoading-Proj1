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
        DB::table('question_survey_type')->insert([
            'survey_type_id' => 1,
            'question_id' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('question_survey_type')->insert([
            'survey_type_id' => 1,
            'question_id' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('question_survey_type')->insert([
            'survey_type_id' => 1,
            'question_id' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('question_survey_type')->insert([
            'survey_type_id' => 1,
            'question_id' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('question_survey_type')->insert([
            'survey_type_id' => 2,
            'question_id' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('question_survey_type')->insert([
            'survey_type_id' => 2,
            'question_id' => 6,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('question_survey_type')->insert([
            'survey_type_id' => 2,
            'question_id' => 7,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('question_survey_type')->insert([
            'survey_type_id' => 3,
            'question_id' => 8,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('question_survey_type')->insert([
            'survey_type_id' => 3,
            'question_id' => 9,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('question_survey_type')->insert([
            'survey_type_id'=> 4,
            'question_id' => 10,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('question_survey_type')->insert([
            'survey_type_id'=> 4,
            'question_id' => 11,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('question_survey_type')->insert([
            'survey_type_id'=> 4,
            'question_id' => 12,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('question_survey_type')->insert([
            'survey_type_id'=> 5,
            'question_id' => 13,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('question_survey_type')->insert([
            'survey_type_id' => 5,
            'question_id' => 14,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('question_survey_type')->insert([
            'survey_type_id' => 5,
            'question_id' => 15,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);
    }
}
