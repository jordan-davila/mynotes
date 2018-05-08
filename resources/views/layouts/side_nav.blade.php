<nav class="side_nav">
	<div class="logo"></div>
	<div class="description_container">
		<h1>Welcome {{ Auth::user()->name }}</h1>
		<p>Hi! Welcome to Mynotes. Here you'll be able to create notes and keep them for later use. This little web app doesn't have much features but I'm sure you'll still be able to take notes just fine. exit()</p>
		<a href="/logout" class="btn btn_yellow">Sign Out</a>
	</div>
	<div class="copyrights">&copy; MyNotes {{ date('Y') }}</div>
</nav>