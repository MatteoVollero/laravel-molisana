<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>

  <header>
    @include('Partials.header')
  </header>

  <main>
    @yield('mainContent')
  </main>


  <footer>

  </footer>

  </body>
</html>
