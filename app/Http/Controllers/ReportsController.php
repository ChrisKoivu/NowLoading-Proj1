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
        $reports = \File::allFiles(public_path('reports'));
        return view('report.index', compact('reports'));
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
        $profession = str_replace('_', ' ', $this->getReportName($id));
        if ($id < 6 ) {
            $report = $this->transformArray($this->selectReport($id));
        } else {
            $report = $this->selectReport($id);
            return view('report.profession', compact('report'));
        }
        return view('report.show', compact('report', 'profession'));  
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

    /**
     * performs query based on report type id
     */

    private function selectReport($report_id){
        // create new database helper instance
        $db = new DatabaseHelper;
        switch ($report_id) {
            case 1:
               return $db->getResponseTotalsCaregiver();
            case 2:
               return $db->getResponseTotalsSpectrum(); 
            case 3:
                return $db->getResponseTotalsEmployer();
            case 4:
                return $db->getResponseTotalsProfessional();
            case 5:
                 return $db->getResponseTotalsCommunity();
            case 6:
                 return $db->getProfessionTotalsByZipCode();            
            default:
                 return null;
        } 
    }

    /**
     * returns name of the report based on the report id
     */
    private function getReportName($report_id){
        switch ($report_id) {
            case 1:
              return 'Parent_Caregiver_';
            case 2:
              return 'Adult_on_Spectrum_';
            case 3:
               return 'Employer_';
            case 4: 
                return 'Professional_';
            case 5: 
                 return 'Community_';
            case 6:
                 return 'Professions_by_zipcode_';
            default:
                  return null;
        }
    }

    /**
     * controller method for generating a csv file
     */
    public function generate($id){       
        $report = $this->selectReport($id);
        $reportName = $this->getReportName($id);
        $db = new DatabaseHelper;

        if(sizeOf($report)>0){   
            if ($id < 6 ) {
              $db->export_csv($report, $reportName);
              return redirect('report');
            } else {
              $db->export_csv_professions($report, $reportName);
              return redirect('report');
            }       
            
        } else {
            echo 'No records found for selected report type';
        }

    }

    /**
     * transforms query array to array of objects in a 
     * printable form
     */

    private function transformArray($dataArray){
        //die(print_r($dataArray));
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
