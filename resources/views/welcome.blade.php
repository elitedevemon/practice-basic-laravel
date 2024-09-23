<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  <h2>This is testing div</h2>
  <div id="laravel-component">
  </div>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script>
    function doAjax() {
      $.ajax({
        type: "GET",
        url: "{{ route('view-component') }}",
        success: function (response) {
          $('#laravel-component').html(response);
        }
      });
    }
    this.doAjax();
    $(document).ready(function(){
      setInterval(() => {
        doAjax();
      }, 5000);
      
    })
  </script>
</body>

</html>