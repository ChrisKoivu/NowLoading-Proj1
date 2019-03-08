<?php

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            'survey_question' => 'How can we help?',
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('questions')->insert([
            'survey_question' => 'Is the individual you’re seeking to assist verbal or non-verbal?',
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('questions')->insert([
            'survey_question' => 'How old is the individual you’re seeking to assist?',
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('questions')->insert([
            'survey_question' => 'Is your child currently employed or seeking employment?',
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);
    }
}
