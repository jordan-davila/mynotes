@extends('layouts.master')
@section('content')
<div class="container">
    <header class="home_header">
        @include('layouts.top_nav')
        <div class="title_container">
        	<h1>Welcome to MyNotes</h1>
        	<h2>A free online note taking platform</h2>
            @if (!Auth::check())
                <div class="btn_container">
                    <a href="/login" class="btn btn_grey m_r_10">Sign In</a>
                    <a href="/register" class="btn btn_yellow">Sign Up</a>
                </div>
            @else
                <div class="btn_container">
                    <a href="/home" class="btn btn_grey m_r_10">Go to Portal</a>
                </div>          
            @endif
        </div>
    </header>
</div>
@endsection
