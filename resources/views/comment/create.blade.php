@extends('layouts.app')

@section('content')

<div class="container">
                 <form class="col s12" method="POST" action="/auth/post/create">
                      
                  <div class="form-group">
                    <label for="subject" class="control-label">Subject</label>
                    <input type="text" class="form-control" id="name" name="subject" required>
                  </div>
                  
                  <div class="form-group">
                    <label for="body" class="control-label">Post Body</label>
                    <!--<input type="text" class="form-control" id="description" name="description" required>-->
                    <textarea class="form-control" rows="5" id="body" name="body" required></textarea>
                  </div>
                 
                  
                  
                  <!--*** IMPORTANT ***-->
                  <div class="modal-footer">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <input class="btn btn-primary" type="submit" name="Submit" value="Add Post">
                  <a href="/admin/department/view" <button type="button" class="btn btn-default" >Cancel</button></a>
                  </div>
                </form>
</div>

@endsection
