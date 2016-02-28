@extends('pages.layout')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>{{ $card->title }}</h1>
			</div>
		</div>
		<ul class="list-group">
		@foreach($card->notes as $note)
				<li class="list-group-item">{{ $note->body }}</li>
		@endforeach
		</ul>
		<div class="row">
			<div class="col-sm-12">
				<h3>Add a New Note</h3>
				<form method="POST" action="/cards/{{ $card->id }}/notes">
					<div class="form-group">
						<textarea name="body" class="form-control"></textarea>
					</div>
					<div class="form-group">
						<button class="btn btn-primary" type="submit">Add Note</button>
					</div>
				</form>
			</div>
		</div>
	</div>
@stop