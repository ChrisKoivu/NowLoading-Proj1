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
        ]); //1

        DB::table('questions')->insert([
            'survey_question' => 'Is the individual you’re seeking to assist verbal or non-verbal?',
            'created_at' => NULL,
            'updated_at' => NULL,
        ]); //2

        DB::table('questions')->insert([
            'survey_question' => 'How old is the individual you’re seeking to assist?',
            'created_at' => NULL,
            'updated_at' => NULL,
        ]); //3

        DB::table('questions')->insert([
            'survey_question' => 'Is your child currently employed or seeking employment?',
            'created_at' => NULL,
            'updated_at' => NULL,
        ]); //4

        DB::table('questions')->insert([
            'survey_question' => 'How can we help?',
            'created_at' => NULL,
            'updated_at' => NULL,
        ]); //5

        DB::table('questions')->insert([
            'survey_question' => ' How old were you when diagnosed?',
            'created_at' => NULL,
            'updated_at' => NULL,
        ]); //6

        DB::table('questions')->insert([
            'survey_question' => ' Are you currently employed or seeking employment?',
            'created_at' => NULL,
            'updated_at' => NULL,
        ]); //7

        DB::table('questions')->insert([
            'survey_question' => 'How can we help?',
            'created_at' => NULL,
            'updated_at' => NULL,
        ]); //8
        
        DB::table('questions')->insert([
            'survey_question' => 'What industry is your business?',
            'created_at' => NULL,
            'updated_at' => NULL,
        ]); //9

        DB::table('questions')->insert([
            'survey_question' => 'How can we help?',
            'created_at' => NULL,
            'updated_at' => NULL,
        ]); //10

        DB::table('questions')->insert([
            'survey_question' => 'Is the individual you’re seeking to assist verbal or non-verbal?',
            'created_at' => NULL,
            'updated_at' => NULL,
        ]); //11

        DB::table('questions')->insert([
            'survey_question' => 'What industry is your business?',
            'created_at' => NULL,
            'updated_at' => NULL,
        ]); //12

        DB::table('questions')->insert([
            'survey_question' => 'How can we help?',
            'created_at' => NULL,
            'updated_at' => NULL,
        ]); //13

        DB::table('questions')->insert([
            'survey_question' => 'How old is the individual you’re seeking to assist?',
            'created_at' => NULL,
            'updated_at' => NULL,
        ]); //14

        DB::table('questions')->insert([
            'survey_question' => 'Is the individual you’re seeking to assist verbal or non-verbal?',
            'created_at' => NULL,
            'updated_at' => NULL,
        ]); //15





    }
}
