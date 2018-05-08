@extends('layouts.master')

@section('content')
<div class="container">
    <main class="bg_grey">
        @include('layouts.top_nav')
        <div class="form_container">
            <h1>
                Login
            </h1>
            <form action="/login" method="POST" class="form">
            	{{ csrf_field() }}
            	<input type="email" name="email" placeholder="Email">
            	<input type="password" name="password" placeholder="Password">
            	<button class="btn btn_yellow">Sign In</button>
            </form>
            @include('layouts.errors')
            <a href="/register" class="redirection_sessions">Don't have an account. Register Here.</a>
        </div>
    </main>
</div>
@endsection
