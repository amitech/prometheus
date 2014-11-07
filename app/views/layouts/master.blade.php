<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prometheus</title>
    {{ stylesheet_link_tag() }}
  </head>
  <body>
    @yield('content')

    {{ javascript_include_tag() }}
  </body>
</html>