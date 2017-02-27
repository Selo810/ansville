@extends('auth.layouts.app')

@section('content')

  
<div class="container">
  <h2>User Information</h2></h2>
    <ul class="list-group">
  <li class="list-group-item">
    
    <b>ACCOUNTING INFORMATION</b>
  </li>
  @foreach ($viewUser as $user)
   <li class="list-group-item">
    <b>USERNAME:</b> {{$user->name}}
  </li>
  
  <li class="list-group-item">
    <b>E-MAIL:</b> {{$user->email}}
  </li>
  <!--<li class="list-group-item">
    <a href="{{ url('/password/reset') }}">Change password</a>
  </li>-->
  <li class="list-group-item">
    <form action="/auth/user/{{$user->id}}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                
            <button class="btn btn-default btn-sm" name="delete"><span class="glyphicon glyphicon-trash"></span> Remove Account</button>
            </form>
  </li>
  
  @endforeach
</ul>
 
 
</div>

@endsection
