@extends('layouts.master')

@section('content')
<div class="container">
    <main class="bg_grey">
       @include('layouts.top_nav')
        <div class="form_container">
            <h1>
                Register
            </h1>
            <form action="/register" method="POST" class="form">
                {{ csrf_field() }}
                <input type="text" name="name" placeholder="Name">
            	<input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
            	<input type="password" name="password_confirmation" placeholder="Confirm Password">
            	<button class="btn btn_yellow">Sign Up</button>
            </form>
            @include('layouts.errors')
            <a href="/login" class="redirection_sessions">Already register? Login here.</a>
        </div>
    </main>
</div>
@endsection
