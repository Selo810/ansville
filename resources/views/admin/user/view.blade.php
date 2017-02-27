@extends('admin.layouts.app2')

@section('content')

  
<div class="container">
  <h2>Users ({{$userCount}})</h2></h2>
    <ul class="list-group">
  <li class="list-group-item">
    <span class="badge">ID</span>
    <b>Username</b>
  </li>
  @foreach ($viewUsers as $user)
   <li class="list-group-item">
    <span class="badge">{{$user->id}}</span>
    {{$user->name}}
  </li>
  @endforeach
</ul>
 
  {!! $viewUsers->links() !!}
</div>

@endsection
