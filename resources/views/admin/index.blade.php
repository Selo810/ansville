@extends('admin.layouts.app')

@section('content')

    <!-- Page Content -->
    <div class="container">
        

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="page-header">
                    Recent Posts
                    <small>{{ $postCount }} Posts </small>
                </h1>

                <!-- First Blog Post -->
                @foreach ($viewPosts as $p)
                <h2>
                    <a href="/post/{{$p->id}}" style="text-decoration: none;">{{ $p->subject }}</a>
                </h2>
                <p class="lead">
                    <span class="" style="color: #90a4ae;"><span class="glyphicon glyphicon-user"> </span> {{ $p->name }}</span>
                </p>
                
                <p><span class="glyphicon glyphicon-time"></span> {{ Carbon\Carbon::parse($p->created_at)->diffForHumans() }}</p>
                <hr>
                <!--
                <img class="img-responsive" src="http://placehold.it/900x300" alt="">
                <hr>-->
                <p>{{ \Illuminate\Support\Str::words($p->body, 40) }}</p>
                <a class="btn btn-default btn-sm" href="/post/{{$p->id}}">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>
                 @endforeach 
                 {!! $viewPosts->links() !!}
                <!-- Pager 
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>
                -->
            </div>

          
       

@endsection
