
@extends('layout.main')

	@section('content')
			<div class="content">			
				<p>Hello! Welcome to my personal website.</p>
				<p>This site is just a brief introduction of myself, my aspirations and my webdeveloping projects.</p>
				To be short, I am a Php Web Developer. I invite you to see my <a href="about">About page</a> to get some personal info, like my resume.<br>
				The <a href="about">Skills &amp Projects page</a> will show you my skills and a little presentation of some projects so far.</p> 
				<div class="name">Kristof Hamelryckx </div><br>
				<div class="quote">'{{ Inspiring::quote() }}'<br><i>(As for developing this website, I used Laravel 5 (which comes with a cool "quote" feature so I left this in ;-))</i></div>
			</div>
	@stop
			