<html>
<head>
<title>
@yield('title')
</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
<!-- Include roboto.css to use the Roboto web font, material.css to include \
the theme and ripples.css to style the ripple effect -->
<link href="/css/roboto.min.css" rel="stylesheet">
<link href="/css/material.min.css" rel="stylesheet">
<link href="/css/ripples.min.css" rel="stylesheet">

<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="/js/ripples.min.js"></script>
<script src="/js/material.min.js"></script>

</head>
<body>
<nav class="navbar navbar-default">
<div class="container-fluid">
<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="{{url('home') }}">Learning Laravel</a>
</div>
<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav navbar-right">
<li class="active"><a href="{{ url('home') }}">Home <span class="sr-only">(current)</span></a></li>
<li><a href="{{ url('about') }}">About</a></li>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Tickets<span class="caret"></span></a>
<ul class="dropdown-menu" role="menu">
<li><a href="{{ url('contact') }}">Create Ticket</a></li>
<li><a href="{{ url('tickets') }}">View Tickets</a></li>
</ul>
</li>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Member <span class="caret"></span></a>
<ul class="dropdown-menu" role="menu">
<li><a href="{{ url('') }}">Logout</a></li>
</ul>
</li>
</ul>
</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>
@yield('content')
</body>
</html>
