@extends('layouts.app')

@section('content')

    <!-- Page Content -->
    <div class="container">
        

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="page-header">
                    Posts
                    <small>{{ $postCount }} Resualts</small>
                </h1>

                <!-- First Blog Post -->
                @foreach ($viewPosts as $p)
                <h2>
                    <a href="/post/{{$p->id}}" style="text-decoration: none;">{{ $p->subject }}</a>
                </h2>
                <p class="lead">
                    <span class="" style="color: #90a4ae;"><span class="glyphicon glyphicon-user"> </span> {{ $p->name }}</span>
                </p>
                
                <p><span class="glyphicon glyphicon-time"></span> {{ Carbon\Carbon::parse($p->created_at)->diffForHumans()  }}</p>
                <hr>
                <!--
                <img class="img-responsive" src="http://placehold.it/900x300" alt="">
                <hr>-->
                <p>{{ \Illuminate\Support\Str::words($p->body, 35) }} </p>
                <a class="btn btn-default btn-sm" href="/post/{{$p->id}}">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>
                 @endforeach 
                 {!! $viewPosts->links() !!}
                
            </div>

          
       

@endsection
