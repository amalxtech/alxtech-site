<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="SCADA Monitoring, Dispatch, and Health Care Room Readiness">
    <meta name="author" content="Alexander MacLean">

    <title>alxTech Web Development</title>

    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/narrow.css" rel="stylesheet">
    @yield('styles')

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="container">
    <div class="header clearfix">
        <nav>
            <ul class="nav nav-pills pull-right">
                <li role="presentation"><a href="/">Home</a></li>
                <li role="presentation"><a href="/contact">Contact</a></li>
            </ul>
        </nav>
        <h3 class="text-muted">alxTech</h3>
    </div>

    @yield('content')

    <footer class="footer">
        <p>&copy; alxTech 2014</p>
    </footer>

</div> <!-- /container -->
@yield('scripts')
</body>
</html>
