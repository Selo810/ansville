@extends('layouts.app')

@section('content')

<!-- Page Content -->
    <div class="container">
        
@foreach ($post as $p)
<?php
  Session::set('postID', $p->id );
  Session::set('userID', $p->userID );
?>
@endforeach 
<!--Display feedback-->
@if (Session::has('status'))
   <div class="alert alert-info">{{ Session::get('status') }}</div>
  @endif
        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-8">

                <!-- Blog Post -->

                <!-- Title -->
                 @foreach ($post as $p)
                <h1><a href="#" style="text-decoration: none;">{{ $p->subject }} </a><small>{{$commentCount}} Answers</small></h1>
                @endforeach
                
                <!-- Author -->
                @foreach ($viewUser as $p)
                <p class="lead">
                    <a href="#" style="color: #90a4ae;"> <span class="glyphicon glyphicon-user"> </span> {{ $p->name }}</a>
                </p>

                <hr>
                @endforeach
                @foreach ($post as $p)
                <!-- Date/Time -->
                <p><span class="glyphicon glyphicon-time"></span> {{ Carbon\Carbon::parse($p->created_at)->diffForHumans() }}</p>
                

                <!-- Post Content -->
                <p >{!!  nl2br(e($p->body)) !!}</p><br />
                
                <hr>
                @endforeach
                <!-- Blog Comments -->

                <!-- Comments Form -->
                <div >
                    <h4>Leave a Comment:</h4>
                    <form role="form" class="col s12" method="POST" action="/post/details">
                        <div class="form-group">
                            <textarea class="form-control" rows="2" name="comment"></textarea>
                        </div>
                        <div class="modal-footer">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                @if (Auth::guest() )
                  <a href="/login"><button type="button" class="btn btn-default btn-sm pull-left" >
                      <span class="glyphicon glyphicon-comment"></span> Comment
                </button></a>
                @else
                <button type="submit" class="btn btn-default btn-sm pull-left">
                      <span class="glyphicon glyphicon-comment"></span> Comment
                </button>
                @endif
                  </div>
                  </form>
                </div>


                <!---Display error message-->
              @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
              @endif

                
                <hr>

                <!-- Posted Comments -->

                <!-- Comment -->
                 @foreach ($comments as $c)
                 @if (Auth::guest() )
                <div class="media">
                    
                    <a class="pull-left" href="#">
                        <span class="glyphicon glyphicon-user">
                    </a>
                    <div class="media-body">
                       
                        <h4 class="media-heading">{{$c->name}}
                        
                            <small><span class="glyphicon glyphicon-time"></span> {{Carbon\Carbon::parse($c->created_at)->diffForHumans()}}</small>
                        </h4>
                        {!!  nl2br(e($c->comment)) !!}
                    </div>
                   
                </div>
                <hr>
                @elseif ($c->userID  == Auth::user()->id) 
                <div class="media">
                    
                    <a class="pull-left" href="#">
                        <span class="glyphicon glyphicon-user">
                    </a>
                    <div class="media-body">
                       
                        <h4 class="media-heading">{{$c->name}}
                        
                            <small><span class="glyphicon glyphicon-time"></span> {{Carbon\Carbon::parse($c->created_at)->diffForHumans()}}</small>
                        </h4>
                        {!!  nl2br(e($c->comment)) !!} <span><form action="/post/{{$c->id}}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button class="btn btn-xs pull-right btn-danger" name="delete"><i class="fa fa-trash"></i></button>
                        </form></span>
                    </div>
                   
                </div>
                 <hr>
                @elseif (Auth::user()->admin == 1)
                <div class="media">
                   
                    <a class="pull-left" href="#">
                        <span class="glyphicon glyphicon-user">
                    </a>
                    <div class="media-body">
                       
                        <h4 class="media-heading">{{$c->name}}
                        
                            <small><span class="glyphicon glyphicon-time"></span> {{Carbon\Carbon::parse($c->created_at)->diffForHumans()}}</small>
                        </h4>
                        {!!  nl2br(e($c->comment)) !!} <span><form action="/post/{{$c->id}}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button class="btn btn-xs pull-right btn-danger" name="delete"><i class="fa fa-trash"></i></button>
                        </form></span>
                    </div>
                   
                </div>
                <hr>
                @else 
                <div class="media">
                    
                    <a class="pull-left" href="#">
                        <span class="glyphicon glyphicon-user">
                    </a>
                    <div class="media-body">
                       
                        <h4 class="media-heading">{{$c->name}}
                        
                            <small><span class="glyphicon glyphicon-time"></span> {{Carbon\Carbon::parse($c->created_at)->diffForHumans()}}</small>
                        </h4>
                        {!!  nl2br(e($c->comment)) !!} 
                    </div>
                   
                </div>
                <hr>
                
                @endif
                
                @endforeach
    
               {!! $comments->links() !!}

            </div>
            <hr>

@endsection
