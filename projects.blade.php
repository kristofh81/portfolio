@extends('layout.main')

	@section('content')
			<div class="content">			

				<article id="projects">

					<div id="carousel"></div>
				<form>
					<input id="btnleft" type="submit" value="previous"></submit>
					<input id="btnright" type="submit" value="next"></submit>
				</form>
				</article>
			</div>
	@stop


	@section('scripts')

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.cycle/3.03/jquery.cycle.all.min.js"></script>
	<script src="/js/myjs.js"></script>


	<script type="text/javascript">
	jQuery(document).ready(function() {

		jQuery('.post').addClass("hidden").viewportChecker({
	    	classToAdd: 'visible animated bounce', // Class to add to the elements when they are visible
	    	offset: 200  
	   	});
	   	
	});            
	</script>

	@stop			
