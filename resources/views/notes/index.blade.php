@extends('layouts.master')

@section('content')
	<div class="container portal">
		@include('layouts.side_nav')
		<div class="notes_container">
			<section class="notes">
				@foreach ($notes as $note)
					<a href="/notes/{{ $note->id }}" class="note">
						<div class="color" style="background-color: {{ $note->color }};"></div>
						<div class="date">{{ $note->updated_at->toFormattedDateString()  }} ({{ $note->updated_at->diffForHumans() }})</div>
						<p>{{ $note->body }}</p>
					</a>
				@endforeach
			</section>
			<div class="notes_footer">
				<a href="/notes/create" class="btn btn_yellow">Create New Note</a>
				<span class="total_notes">Total Notes: {{ $notes->count() }}</span>
			</div>
		</div>
	</div>
@endsection