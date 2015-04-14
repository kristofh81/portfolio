			<footer>					
				<br>Find me at my accounts: <br>
				<ul class="links">					 
					<li><a href="https://be.linkedin.com/pub/kristof-hamelryckx/a8/b96/157"><img src="img/linkedin.png" alt="LinkedIn Profile"></a></li>
					<li><a href="https://www.facebook.com/kristof.hamelryckx"><img src="img/facebook.jpg"></a></li>
					<li><a href="https://github.com/kristofh81"><img src="img/github.png" alt="GitHub Profile"></a></li>
					<li><a href="https://www.drupal.org/user/3170905/"><img src="img/drupal.png" alt="Drupal Profile"></a></li>
				</ul>
				<span class="title-footer">Kristof Hamelryckx<p id="function">Web Developer PHP and Drupal</p><p><i style="font-size:10px;">&copy; <?php echo date('Y'); ?> Copyright Hamelryckx Kristof</i></p></span>
			</footer>
		</div>

	<!--cycle js function on projects page-->
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.cycle/3.03/jquery.cycle.all.min.js"></script>
	<script src="js/myjs.js"></script>

	<!--viewport js function on skills page-->
	<script src="js/viewportchecker.js"></script>
	<script type="text/javascript">
	jQuery(document).ready(function() {

		jQuery('.post').addClass("hidden").viewportChecker({
	    	classToAdd: 'visible animated bounce', // Class to add to the elements when they are visible
	    	offset: 200  
	   	});
	   	
	});            
	</script>
	</body>
</html>