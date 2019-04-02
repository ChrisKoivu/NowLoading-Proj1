<?php

use Illuminate\Database\Seeder;

class SurveysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('survey_types')->insert([
            'survey_name' => 'parent',
            'description' => 'this is a survey for parents of autistic individuals',
             
        ]);

       
        DB::table('survey_types')->insert([
            'survey_name' => 'spectrum',
            'description' => 'survey for an adult on the autism spectrum',
            
        ]);

        DB::table('survey_types')->insert([
            'survey_name' => 'employer',
            'description' => 'survey for an employer of autistic individuals',
            
        ]);

        DB::table('survey_types')->insert([
            'survey_name' => 'professional',
            'description' => 'survey for individuals providing professional services to individuals on the spectrum',
            
        ]);

        DB::table('survey_types')->insert([
            'survey_name' => 'community',
            'description' => 'survey for those who have acquaintances or family members on the spectrum',
            
        ]);
    }
}
