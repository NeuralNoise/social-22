@extends('layouts.default')

@section('content')

	<div class="jumbotron">
		<h1>Velkommen til Socializer</h1>
		<p>
			Yet Another Social Network
		</p>
		<p>
			
			{{ link_to_route('register_path', 'Tilmeld dig' , null, array('class' => 'btn btn-md btn-primary')) }}
		</p>
	</div>

@endsection