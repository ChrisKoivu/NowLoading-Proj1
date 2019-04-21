<?php


namespace App\Services;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;



class DatabaseHelper
{

   public function getResponseTotalsCaregiver(){

      $response_totals = 
      DB::select(DB::raw("SELECT count(choices.response_id) as total, questions.survey_question, responses.survey_question_response
      FROM `choices`
      INNER JOIN responses on responses.id = choices.response_id
      INNER JOIN questions on questions.id = choices.question_id
      inner JOIN question_survey_type on questions.id = question_survey_type.question_id
      where question_survey_type.survey_type_id = 1
      group by responses.survey_question_response, questions.survey_question, choices.response_id"));
    
      return $response_totals;


                
   }

   public function getResponseTotalsSpectrum(){
      $response_totals =
      DB::select(DB::raw("SELECT count(choices.response_id) as total, questions.survey_question, responses.survey_question_response
      FROM `choices`
      INNER JOIN responses on responses.id = choices.response_id
      INNER JOIN questions on questions.id = choices.question_id
      inner JOIN question_survey_type on questions.id = question_survey_type.question_id
      where question_survey_type.survey_type_id = 2
      group by responses.survey_question_response, questions.survey_question, choices.response_id"));
    
      return $response_totals;

                
   }

   public function getResponseTotalsEmployer(){
      $response_totals =
      DB::select(DB::raw("SELECT count(choices.response_id) as total, questions.survey_question, responses.survey_question_response
      FROM `choices`
      INNER JOIN responses on responses.id = choices.response_id
      INNER JOIN questions on questions.id = choices.question_id
      inner JOIN question_survey_type on questions.id = question_survey_type.question_id
      where question_survey_type.survey_type_id = 3
      group by responses.survey_question_response, questions.survey_question, choices.response_id"));
    
      return $response_totals;

                
   }

   public function getResponseTotalsProfessional(){
      $response_totals =
      DB::select(DB::raw("SELECT count(choices.response_id) as total, questions.survey_question, responses.survey_question_response
      FROM `choices`
      INNER JOIN responses on responses.id = choices.response_id
      INNER JOIN questions on questions.id = choices.question_id
      inner JOIN question_survey_type on questions.id = question_survey_type.question_id
      where question_survey_type.survey_type_id = 4
      group by responses.survey_question_response, questions.survey_question, choices.response_id"));
    
      return $response_totals;

                
   }

   public function getResponseTotalsCommunity(){
      $response_totals =
      DB::select(DB::raw("SELECT count(choices.response_id) as total, questions.survey_question, responses.survey_question_response
      FROM `choices`
      INNER JOIN responses on responses.id = choices.response_id
      INNER JOIN questions on questions.id = choices.question_id
      inner JOIN question_survey_type on questions.id = question_survey_type.question_id
      where question_survey_type.survey_type_id = 5
      group by responses.survey_question_response, questions.survey_question, choices.response_id"));
    
      return $response_totals;

                
   }

   public function getProfessionTotalsByZipCode(){
      $response_totals = 
      DB::select(DB::raw("SELECT count(demographics.profession) as total, demographics.zip, demographics.profession FROM `demographics`
      group by demographics.profession, demographics.zip"));
    
      return $response_totals;


   }

   /**
    * convert survey query array to a csv file
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
  

   public function export_csv($arrayData, $reportName)
   {
      $reportName = $reportName . 'report.csv';
      $file_path = public_path('reports') . '/' . $reportName;
      $file = fopen($file_path,"w");
      fputcsv($file, array("Question", "Response", "Total Responses"));
      foreach ($arrayData as $line)
      {
        fputcsv($file, array($line->survey_question, $line->survey_question_response, 
        $line->total));
      }
      fclose($file);    
   }

   public function export_csv_professions($arrayData, $reportName)
   {
      $reportName = $reportName . 'report.csv';
      $file_path = public_path('reports') . '/' . $reportName;
      $file = fopen($file_path,"w");
      fputcsv($file, array("Profession", "Zip Code", "Total in Zip Code"));
      foreach ($arrayData as $line)
      {
        fputcsv($file, array($line->profession, $line->zip, 
        $line->total));
      }
      fclose($file);    
   }
}
