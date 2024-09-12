<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Blade template syntax</title>
</head>
<body>
  {{ "hello" }} <br>
  {{ "<h1>Hello</h1>" }} <br>
  {!! "<h1>Hello</h1>" !!}

  <!-- Checking switch statement -->
  @php
  /**
   * TODO: checking switch statement
   */
    $val = 3;
  @endphp

  @switch($val)
    @case(1)
      <h2>This is first case</h2>
      @break
    @case(2)
      <h2>This is second case </h2>
    @break
    @case(3)
      <h2>This is third case</h2>
    @break
  
    @default
    <h2>This is default case</h2>
  @endswitch

  <!-- Testing loop statement -->
  @php
    /** 
     * TODO: testing the loop statement, importantly $loop->iteration statement which returns the index number from 1
     */
    $fruits = ['apple', 'banana', 'pineapple', 'jackfruit', 'pepeye'];
  @endphp
  
  @foreach ($fruits as $fruit)
    <p>
      <h2><span>{{ $loop->iteration }}</span><span>{{ $fruit }}</span></h2>
    </p>
  @endforeach
</body>
</html>