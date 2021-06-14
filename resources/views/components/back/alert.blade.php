@php
$flashStatus = [
  'success' => 'success',
  'error'   => 'error'
];
@endphp
@foreach($flashStatus as $key => $value)
  @if (Session::has($key))
    <div class="alert alert-{{ $value }}">
      {{ session($key) }}
      <button type="button" class="close" data-dismiss="alert" aria-label="close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  @endif
@endforeach
