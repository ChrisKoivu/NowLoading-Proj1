
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


<?php if(!empty($images)){ ?>

    <h3>Images</h3>
    <table>
    <tr><th>Image</th><th>Image Name</th></tr>
    @foreach($images as $image)   
    <?php  $imageName = basename($image); ?>    
      <tr>
        <td>
          <img src="{{asset('/images/'. $imageName)}}"  alt="{{$imageName}}" height="42" width="42"> 
        </td>
        <td>
          {{$imageName}}
        </td>
      </tr>
  @endforeach
    </table>
<?php } ?>


<?php if(!empty($documents)){ ?>

  <h3>Documents</h3>
  <table>
  <tr><th>Document</th><th>Document Name</th></tr>
  @foreach($documents as $document)   
  <?php  $documentName = basename($document); ?>    
    <tr>
      <td>
      </td>
      <td>
        {{$documentName}}
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
