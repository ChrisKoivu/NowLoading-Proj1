<!-- index.blade.php -->
@extends('layouts.app')
@section('content') 
    <div class="container">
        <br />
        @if (session('success'))
        <div class="alert alert-success">
            <p>{{ session('success') }}</p>
        </div><br />
        @endif
        <?php 
            if(empty($pages)){
                echo '
                <div class="alert alert-danger">
                      <p>No pages have been created yet.</p>
                </div><br />
                ';
            }
        ?>
        @foreach($pages as $page)
        
            <h3><a href="{{ action('PagesController@show', $page['id']) }}">{{$page['title']}}</a></h3>
             <p>created on {{$page['created_at']}}</p>
            
            <table class="edit-buttons">
                <tr>
                    <td>
                        <a href="{{action('PagesController@edit', $page['id'])}}" class="btn btn-warning">Edit</a>
                    </td>
                    <td>
                        <form action="{{action('PagesController@destroy', $page['id'])}}" method="post">
                            {{csrf_field()}}
                            <input name="_method" type="hidden" value="DELETE">
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            </table>
          
          <hr>
        @endforeach
       
    </div>
  @endsection