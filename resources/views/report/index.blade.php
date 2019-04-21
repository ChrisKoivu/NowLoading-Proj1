
<style>
  td, th {
    padding:10px;
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
