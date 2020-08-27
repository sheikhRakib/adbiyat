@extends('backend.layouts.app')

@section('content')
<h1>Activity Logs</h1>
<hr>

@if($activities)
<ul class="list-group">
	@foreach ($activities as $activity)
	<li class="list-group-item">
		{{ Auth::user()->fullname}} 
		{{ $activity->action }}
		{{ $activity->data }} on
		{{ $activity->created }}
	</li>
		
	@endforeach
</ul>
@endif
@endsection
