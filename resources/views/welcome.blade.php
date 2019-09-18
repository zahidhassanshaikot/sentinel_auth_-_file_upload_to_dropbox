@extends('master')
@section('container')
  
            <div class="card-body">
                    <form action="{{ url('PASS_ACTION_URL') }}" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <input type="file" name="profile_image" id="exampleInputFile">
                        </div>
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
               
            </div>
    
            <div class="card-body">
                    <form action="/post-create" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="exampleInputFile">Title</label>
                            <input type="text" name="post_title">
                        </div>
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-default">Create Post</button>
                    </form>
               
            </div>
   
            </div>
   
@endsection
