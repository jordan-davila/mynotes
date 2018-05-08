@extends('layouts.master')

@section('content')
	<div class="container portal">
		@include('layouts.side_nav')
		<div class="notes_container">
			<section class="create_note_container">
				<h1>Edit Note: Last Updated {{ $note->updated_at->diffForHumans() }}</h1>
				<form action="/notes/{{ $note->id }}" method="POST">
					{{ method_field('patch') }}
					{{ csrf_field() }}
					<input type="color" name="color" class="color" value="{{ $note->color }}">
					<textarea name="body" cols="30" rows="10" placeholder="Write your note">{{ $note->body }}</textarea>
					<div class="btn_container">						
						<button class="btn btn_yellow">Edit Note</button>
						<a href="/home" class="btn btn_red">Cancel</a>
					</div>
				</form>
				<form method="post" action="/notes/{{ $note->id }}" class="form_delete">
					{{ method_field('delete') }}
					{{ csrf_field() }}
					<button class="btn btn_red">Delete Note</button>
				</form>
			</section>
		</div>
	</div>
@endsection