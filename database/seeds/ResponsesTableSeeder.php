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

        DB::table('responses')->insert([
            'survey_question_response' => 'Never diagnosed, but believe I may be on the spectrum',
            'question_id' =>5,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'New diagnosis, what’s next and seeking resources',
            'question_id' =>5,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Already diagnosed, looking for resources and help',
            'question_id' =>5,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Birth to 3 years of age',
            'question_id' =>6,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Preschool',
            'question_id' =>6,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Elementary School',
            'question_id' =>6,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Middle School',
            'question_id' =>6,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'High School',
            'question_id' =>6,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Adult',
            'question_id' =>6,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Not applicable',
            'question_id' =>6,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Currently Employed, working 30+ hours a week',
            'question_id' =>7,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        
        DB::table('responses')->insert([
            'survey_question_response' => 'Currently Employed, working less than 30 hours a week',
            'question_id' =>7,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Not employed, seeking Full Time employment',
            'question_id' =>7,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Not employed, seeking Part-Time employment',
            'question_id' =>7,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Not employed, not seeking employment',
            'question_id' =>7,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

       
        DB::table('responses')->insert([
            'survey_question_response' => 'Some of our employees have children on the spectrum, seeking resources',
            'question_id' =>8,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Interested in hiring people on the spectrum',
            'question_id' =>8,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Interested in providing services or products to people on the spectrum',
            'question_id' =>8,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'I supervise people on or may be on the spectrum',
            'question_id' =>8,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Financial/Banking',
            'question_id' =>9,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Government/Public/Social Services',
            'question_id' =>9,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Healthcare',
            'question_id' =>9,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Education',
            'question_id' =>9,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Legal',
            'question_id' =>9,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Manufacturing',
            'question_id' =>9,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Retail',
            'question_id' =>9,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Internet/Media/Advertising',
            'question_id' =>9,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Hospitality/Travel',
            'question_id' =>9,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Transportation',
            'question_id' =>9,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Art/Entertainment',
            'question_id' =>9,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Information Technology',
            'question_id' =>9,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Human Resources/Staffing',
            'question_id' =>9,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Other',
            'question_id' =>9,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Interested in providing services or products to people on the spectrum',
            'question_id' =>10,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'I supervise people on or may be on the spectrum',
            'question_id' =>10,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Some of my clients are on the spectrum, seeking resources',
            'question_id' =>10,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Some of my clients have child(ren) on the spectrum, seeking resources',
            'question_id' =>10,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Verbal',
            'question_id' =>11,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Non-verbal',
            'question_id' =>11,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Both',
            'question_id' =>11,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Not sure',
            'question_id' =>11,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Financial/Banking',
            'question_id' =>12,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Government/Public/Social Services',
            'question_id' =>12,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Healthcare',
            'question_id' =>12,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Education',
            'question_id' =>12,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Legal',
            'question_id' =>12,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Manufacturing',
            'question_id' =>12,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Retail',
            'question_id' =>12,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Internet/Media/Advertising',
            'question_id' =>12,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Hospitality/Travel',
            'question_id' =>12,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Transportation',
            'question_id' =>12,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Art/Entertainment',
            'question_id' =>12,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Information Technology',
            'question_id' =>12,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Human Resources/Staffing',
            'question_id' =>12,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Other',
            'question_id' =>12,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'My family member, neighbor, or friend has child(ren) on the spectrum, 
            seeking information',
            'question_id' =>13,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'I work with people on the spectrum, seeking information',
            'question_id' =>13,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Interested in working with people on the spectrum, seeking information',
            'question_id' =>13,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'General, seeking more information',
            'question_id' =>13,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Birth to 3 years of age',
            'question_id' =>14,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Preschool',
            'question_id' =>14,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Elementary School',
            'question_id' =>14,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Middle School',
            'question_id' =>14,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'High School',
            'question_id' =>14,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Adult',
            'question_id' =>14,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Verbal',
            'question_id' =>15,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Non-verbal',
            'question_id' =>15,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

        DB::table('responses')->insert([
            'survey_question_response' => 'Not sure',
            'question_id' =>15,
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);

    }
}
