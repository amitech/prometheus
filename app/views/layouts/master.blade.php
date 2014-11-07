<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prometheus</title>
    {{ stylesheet_link_tag() }}
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Prometheus</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="#">Explore</a></li>
            <li><a href="#">Developers</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Signup</a></li>
            <li><a href="#">Login</a></li>
          </ul>
        </div>
      </div>
    </nav>

    @yield('content')

    {{ javascript_include_tag() }}
  </body>
</html>