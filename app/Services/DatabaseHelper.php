<?php


namespace App\Services;
use Illuminate\Support\Facades\DB;


class DatabaseHelper
{

   public function getResponseTotalsCaregiver(){

      $response_totals = 
      DB::select(DB::raw("SELECT count(choices.response_id), questions.survey_question, responses.survey_question_response
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
      DB::select(DB::raw("SELECT count(choices.response_id), questions.survey_question, responses.survey_question_response
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
      DB::select(DB::raw("SELECT count(choices.response_id), questions.survey_question, responses.survey_question_response
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
      DB::select(DB::raw("SELECT count(choices.response_id), questions.survey_question, responses.survey_question_response
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
      DB::select(DB::raw("SELECT count(choices.response_id), questions.survey_question, responses.survey_question_response
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
      DB::select(DB::raw("SELECT count(demographics.profession), demographics.zip, demographics.profession FROM `demographics`
      group by demographics.profession, demographics.zip"));
    
      return $response_totals;


   }






}








?>