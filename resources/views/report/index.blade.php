
<style>
  td, th {
    padding:10px;
  }
  #form-wrapper,.form-control{
    margin:20px 0px;
    width:400px;
  }

  #form-wrapper{
    margin-bottom: 150px;
  }

  
</style>


@extends('layouts.app')
@section('content')


@auth

       
<div class="container-fluid">
    <div class="row"> 
       <!-- include sidenav -->
        @include('layouts.partials.admin-sidenav')
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div id="form-wrapper">
          <h4>Select Report Type</h4>
          <form action="{{'/report/generate'}}" method="post">
          {{ csrf_field() }}
            <select class="form-control" name ="report_id">
              <option value = 1>Parent/Caregiver</option>
              <option value = 2>Adult on Spectrum</option>
              <option value = 3>Employer</option>
              <option value = 4>Professional</option>
              <option value = 5>Community</option>
              <option value = 6>Professions by Zip Code</option>
            </select>  
            <button type="submit" class="btn btn-primary">Generate Report</button>
          </form>
        </div>
<?php if(!empty($reports)){ ?>
  <h3>Reports</h3>
  <table>
  <tr><th>Report</th><th>Report Name</th></tr>
  @foreach($reports as $report)   
  <?php  $reportName = basename($report); ?>    
    <tr>
      <td> <a href="{{  '/reports/' . $reportName}}">Download File</a>
      </td>
      <td>
        {{$reportName}}
      </td>
    </tr>
@endforeach
  </table>
<?php } ?>


</div>
</div>
</main>

@endauth

@endsection
