<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ANSVILLE') }}</title>
    <link href='http://fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    
    <link href="/css/app.css" rel="stylesheet">
    <style>
        #well {
            background-color: white;
            color: #212121;
        }
        #body{
            color: black;
            background-color: #fafafa;
        }
        
    </style>
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body id="body">
    <div id="app">
        <nav class="navbar navbar-inverse navbar-static-top" style="background-color: #1C2331">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'ANSVILLE') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                        <li><a href="{{ url('/') }}"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                        <li><a href="{{ url('/auth/post/create') }}">Post Question</a></li>
                    </ul>
                    
                    <form class="navbar-form navbar-right" method="GET" action="/post/search">
                    <div class="form-group">
                      <input type="text" class="form-control" name="search" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </form>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                     @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @elseif(Auth::user()->admin == 0)
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/auth/post/view') }}">My Posts</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @elseif(Auth::user()->admin == 1)
                    <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/admin/index') }}"><span class="glyphicon glyphicon-dashboard"></span> DASHBOARD</a></li>
                                <li><a href="{{ url('/auth/post/view') }}">My Post</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
        
        <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well 
                <div class="well">
                    <h4>Search for Posts</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    !-- /.input-group 
                </div>-->
                <br />
                
                <div class="well" id="well">
                    <h4>CHOOSE A FILTER</h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="list-unstyled">
                                <hr>
                                <li><a href="/"><span class="glyphicon glyphicon-globe"></span> All Threads</a>
                                </li>
                                <hr>
                                <li><a href="/post/todayPosts"><span class="glyphicon glyphicon-fire"></span> Today's Questions</a>
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                    <!-- /.row -->
                    
                    
                    <h4>TODAY'S STATISTICS</h4>
                    <div class="row">
                        <div class="col-sm-12">
                            <ul class="list-unstyled">
                                <hr>
                                <li><a href="#">Posts </a> ({{ $todayPostCount }})</li>
                                <hr>
                                <li><a href="#">Comments</a> ({{ $todayComCount }})</li>
                                <hr>
                                <li><a href="#">Users</a> ({{ $todayUserCount }})</li>
                            </ul>
                        </div>
                        
                    </div>
                    
                    <h4>BLOG STATISTICS</h4>
                    <div class="row">
                        <div class="col-sm-12">
                            <ul class="list-unstyled">
                                <hr>
                                <li><a href="/admin/post/view">Posts </a> ({{ $postCount }})</li>
                                <hr>
                                <li><a href="#">Comments</a> ({{ $commentCount }})</li>
                                <hr>
                                <li><a href="/admin/user/view">Users</a> ({{ $userCount }})</li>
                            </ul>
                        </div>
                        
                    </div>
                    
                </div>
                
            

            </div>

        
    </div>
    
    <hr style="border: solid #1C2331;">

        <!-- Footer -->
        <footer>
            <div class="row">
                <span class="pull-right">
                    <a href="javascript:void(0);" id="scroll" >
                        <button type="button" class="btn btn-danger btn-sm">
                              <span class="glyphicon glyphicon-chevron-up"></span> UP
                        </button>
                    </a>
                </span>
                
                <div class="col-lg-12">
                    <p class="pull-left">Copyright &copy; 2017 ANSVILLE. All rights reserved.</p> 
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>
    <!-- Scripts -->
    
    <script src="/js/app.js"></script>
    
    <!--Bring page back to the top-->
    <script type='text/javascript'>
    $(document).ready(function(){ 
    $(window).scroll(function(){ 
        if ($(this).scrollTop() > 100) { 
            $('#scroll').fadeIn(); 
        } else { 
            $('#scroll').fadeOut(); 
        } 
    }); 
    $('#scroll').click(function(){ 
        $("html, body").animate({ scrollTop: 0 }, 600); 
        return false; 
    }); 
    });
</script>
</body>
</html>
