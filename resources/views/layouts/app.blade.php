<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title', 'Checking the layout and section system')</title>
  @stack('styles')
</head>
<body>
  
  @hasSection('content')
    @yield('content')
  @endif

  @section('message')
    <h2>This is heading two</h2>
  @show

  @stack('scripts')
</body>
</html>