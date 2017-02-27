@extends('auth.layouts.app')

@section('content')

  
<div class="container">
  <div class="row">
  @if (Session::has('status'))
   <div class="alert alert-info">{{ Session::get('status') }}</div>
  @endif
  <h2>My Posts ({{$userPostCount}})</h2></h2>
  <div class = "table-responsive">
  <table class="table sm-12">
 <button class="btn btn-primary" onclick="window.location.href='/auth/post/create'">Create Post</button>

    <thead>
      <tr>
        <th>Subject</th>
        <th>Body</th>
        <th>Time Posted</th>
      </tr>
    </thead>
     @foreach ($viewPosts as $p)
    <tbody>
      <tr>
        <td><a href="/post/{{$p->id}}">{{ $p->subject }}</a></td>
        <td><a href="/post/{{$p->id}}">{{ \Illuminate\Support\Str::words($p->body, 10) }}</a></td>
        <td>{{ $p->created_at->format('m/d/Y') }}</td>
        
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
  </div>
  {!! $viewPosts->links() !!}
  
  </div>
</div>

@endsection
