<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Checking custom blade directive</title>
</head>
<body>
  @php
    $status = true;
  @endphp

  @status($status)
  <h2>This is status true</h2>
  @else
  <h2>This is status false</h2>
  @endstatus
</body>
</html>
