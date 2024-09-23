<div>
  <h1>This is testing component</h1>

  <ul>
    {{-- @foreach($posts as $post)
      <li>{{ $post->id.$post->title }}</li>
      <dd>{{ $post->post }}</dd>
    @endforeach --}}
    <li>{{ $posts->id.$posts->title }}</li>
    <dd>{{ $posts->post }}</dd>
  </ul>
</div>