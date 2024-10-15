<div>
  @php
    $name = 'EMON HASSAN'
  @endphp
  <button onclick="changeVal()">Click me</button>
  <br>
  <br>
  <br>
  <div id="name"></div>
  
</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>

  var name = @json($name);
  console.log(name);

  function changeVal() {
    $('#name').html(name);
    console.log(name);
  }

</script>