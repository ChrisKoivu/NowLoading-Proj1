<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\DatabaseHelper;


class ReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $report = $this->selectReport($id);
        return view('reports.show', compact('report'));    

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function selectReport($report_id){
        $db = new DatabaseHelper;
        switch ($report_id) {
            case 1:
               return $this->transformArray($db->getResponseTotalsCaregiver());
            case 2:
               return $this->transformArray($db->getResponseTotalsSpectrum()); 
            case 3:
                return $this->transformArray($db->getResponseTotalsEmployer());
            case 4:
                return $this->transformArray($db->getResponseTotalsProfessional());
            case 5:
                 return $this->transformArray($db->getResponseTotalsCommunity());
            case 6:
                 return $db->getProfessionTotalsByZipCode();            
            default:
                 return null;
        } 
    }

    /**
     * transforms query array to array of objects in a 
     * printable form
     */

    private function transformArray($dataArray){
        $array = [];
        $i=0;
        $items = sizeOf($dataArray);      
        If($items > 0) {
            foreach($dataArray as $result){
                // add response object array to stack
                $array[$result->survey_question][]=$dataArray[$i];    
                // go to next response object array   
                $i++;
            }            
            return $array;
        } else {
            return 'no records found';
        }
    }
}
