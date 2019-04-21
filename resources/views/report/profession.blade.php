@extends('layouts.app')

@section('content')

<style>
  td, th{
      padding: 0px 10px;
  }
</style>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <h4> User Profession Categories by Zip Code</h4>
                <table>
                <tr><th>Profession</th><th>Zip Code</th><th>Total</th></tr>
                <?php 
                    if(is_array($report)){
                        foreach ($report as  $value){
                            echo '<tr><td>' . $value->profession . '</td><td>' . 
                            $value->zip.'</td><td>'. $value->total. '</td></tr>'; 
                        }            
                    } else {
                        echo $report;
                    }           
                ?>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
