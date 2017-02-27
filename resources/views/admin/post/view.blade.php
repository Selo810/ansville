@extends('admin.layouts.app2')

@section('content')

  
<div class="container">
  <h2>Posts ({{$postCount}})</h2></h2>
  <table class="table">
 <button class="btn btn-primary" onclick="window.location.href='/auth/post/create'">Create Post</button>

    <thead>
      <tr>
        <th>Username</th>
        <th>Subject</th>
        <th>Body</th>
        <th>Time Posted</th>
      </tr>
    </thead>
     @foreach ($viewPosts as $p)
    <tbody>
      <tr>
        <td><a href="/post/{{$p->id}}">{{ $p->name }}</a></td>
        <td><a href="/post/{{$p->id}}">{{ $p->subject }}</a></td>
        <td><a href="/post/{{$p->id}}">{{ \Illuminate\Support\Str::words($p->body, 10) }}</a></td>
        <td>{{ Carbon\Carbon::parse($p->created_at)->diffForHumans() }}</td>
        
        <td><a class="btn-floating btn-large waves-effect waves-light blue" href="/auth/post/{{$p->id}}">Edit</a></td>
        <td>
            <form action="/auth/post/{{$p->id}}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                
            <button class="btn btn-default btn-sm" name="delete"><span class="glyphicon glyphicon-trash"></span> Remove</button>
            </form>
             
        </td>
      </tr>
      
    </tbody>
    @endforeach
  </table>
  {!! $viewPosts->links() !!}
</div>

@endsection
