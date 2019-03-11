<?php

use Illuminate\Database\Seeder;

class ResponsesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('responses')->insert([
            'survey_question_response' => 'No diagnosis yet, need more information',
            'question_id' =>1,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'New diagnosis, what’s next?',
            'question_id' =>1,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Already diagnosed, looking for resources and help',
            'question_id' =>1,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Verbal',
            'question_id' =>2,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Non-verbal',
            'question_id' =>2,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Birth to 3 years of age',
            'question_id' =>3,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Birth to 3 years of age',
            'question_id' =>3,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Preschool',
            'question_id' =>3,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Elementary School',
            'question_id' =>3,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Middle School',
            'question_id' =>3,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'High School',
            'question_id' =>3,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Adult',
            'question_id' =>3,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Currently Employed, working 30+ hours a week',
            'question_id' =>4,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        
        DB::table('responses')->insert([
            'survey_question_response' => 'Currently Employed, working less than 30 hours a week',
            'question_id' =>4,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Not employed, seeking Full Time employment',
            'question_id' =>4,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Not employed, seeking Part-Time employment',
            'question_id' =>4,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Not employed, not seeking employment',
            'question_id' =>4,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Not applicable',
            'question_id' =>4,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);
    }
}
