@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-offset-2 col-md-8">
           <form>
                <div class="form-group">
                    <label for="page-title">Page Title</label>
                    <input type="text" class="form-control" name ="page-title" id="page-title" placeholder="Page Title">
                </div>
                <div class="form-group">
                    <label for="editor">Editor</label>
                    <textarea id="editor" name="editor-content"class="form-control" rows="3">

                    </textarea>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>

           </form>
        </div>
    </div>
</div>
@endsection
