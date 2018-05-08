@extends('layouts.master')

@section('content')
	<div class="container portal">
		@include('layouts.side_nav')
		<div class="notes_container">
			<section class="create_note_container">
				<h1>Create New Note</h1>
				<form action="/notes" method="POST">
					{{ csrf_field() }}
					<input type="color" name="color" class="color" value="#e3f4bb">
					<textarea name="body" cols="30" rows="10" placeholder="Write your note"></textarea>
					<div class="btn_container">						
						<button class="btn btn_yellow">Create Note</button>
						<a href="/home" class="btn btn_red">Cancel</a>
					</div>
				</form>
			</section>
		</div>
	</div>
@endsection