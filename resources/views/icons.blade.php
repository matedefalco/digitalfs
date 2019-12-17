<div class="likesContainer row">
  <a href="#" style="width:12.5%">
    <i class="likesitem la la-thumbs-up fa-2x" style="width:100%"></i>
  </a>

  <a href="#" style="width:12.5%">
    <i class="likesitem la la-thumbs-down fa-2x" style="width:100%"></i>
  </a>

  {{-- si estas logueado --}}
  @if($post->user->id == Auth::user()->id)
  <a href="/edit/{{$post->id}}" style="width:12.5%">
    <i class="las la-edit fa-2x" style="width:100%"></i>
  </a>

  <a href="/destroy/{{$post->id}}" style="width:12.5%">
    <i class="las la-trash-alt fa-2x" style="width:100%"></i>>
  </a>

@endif
</div>
