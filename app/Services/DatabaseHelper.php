<?php


namespace App\Services;
use Illuminate\Support\Facades\DB;


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


   //outputs records to csv file stream

   public function export($arrayData)
{
    $headers = array(
        "Content-type" => "text/csv",
        "Content-Disposition" => "attachment; filename=file.csv",
        "Pragma" => "no-cache",
        "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
        "Expires" => "0"
    );

    $reviews = Reviews::getReviewExport($this->hw->healthwatchID)->get();
    $columns = array('ReviewID', 'Provider', 'Title', 'Review', 'Location', 'Created', 'Anonymous', 'Escalate', 'Rating', 'Name');

    $callback = function() use ($reviews, $columns)
    {
        $file = fopen('php://output', 'w');
        fputcsv($file, $columns);

        foreach($reviews as $review) {
            fputcsv($file, array($review->reviewID, $review->provider, 
            $review->title, $review->review, $review->location, 
            $review->review_created, $review->anon, $review->escalate, 
            $review->rating, $review->name));
        }
        fclose($file);
    };
    return Response::stream($callback, 200, $headers);
}






}








?>