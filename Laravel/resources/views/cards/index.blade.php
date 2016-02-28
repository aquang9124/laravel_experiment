@extends('pages.layout')

@section('content')
	@foreach ($cards as $card)
		<div>
			<a href="/cards/{{ $card->id }}">{{ $card->title }}</a>
		</div>
	@endforeach
@stop