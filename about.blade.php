@extends('layout.main')

	@section('content')
		<div class="content">
			<div id="leftside">
			<article id="intro">
				<section id="currently">
					<h2>Kristof Hamelryckx</h2>
					<img id="portret" src="../img/myself.jpg">
					
				</section>
				<section id="currently">
					<h2>I have been following</h2>
					<p>PHP - Drupal Developer,<br>
					<a href="http://www.intecbrussel.be/Werkzoekende/WerkzoekendeHome/PHPenDrupalDeveloperontwinternetplatformen.aspx">Intec Brussel, in Brussels, 1 year at from may 2014.</a></p>
				</section>
				<br>
				<section id="currently">
					<h2>What's on my mind now?...</h2>
					<p>I would like to sharpen some of my skills and knowledge...<br>
					My wishlist :<br>
					<ol>
						<li>studying on Laravel 5 (just came out last month!)</li>
						<li>excercise graphical applications like Photoshop</li>
					</ol>
				</section>
				<br>
			</article>

			<article id="languages">
					<h2>Languages:</h2>
						<table>
								<tr>
									<th></th>
									<th><i class="fa fa-star-o"></i> </th>
									<th><i class="fa fa-star-o"></i> </th>
									<th><i class="fa fa-star-o"></i> </th>
									<th><i class="fa fa-star-o"></i> </th>
									<th><i class="fa fa-star-o"></i> </th>
								</tr>
								<tr>
									<td><strong>Dutch</strong> (mother tongue): </td>
									<td><i class="post fa fa-star"></i> </td>
									<td><i class="post fa fa-star"></i> </td>
									<td><i class="post fa fa-star"></i> </td>
									<td><i class="post fa fa-star"></i> </td>
									<td><i class="post fa fa-star"></i> </td>
									</td>
								</tr>
								<tr>
									<td><strong>English:</strong></td>
									<td><i class="post fa fa-star"></i> </td>
									<td><i class="post fa fa-star"></i> </td>
									<td><i class="post fa fa-star"></i> </td>
									<td><i class="post fa fa-star"></i> </td>
									<td><i class="post fa fa-star"></i> </td>
									</td>
								</tr>
								<tr>
									<td><strong>Italian:</strong></td>
									<td><i class="post fa fa-star"></i> </td>
									<td><i class="post fa fa-star"></i> </td>
									<td><i class="post fa fa-star"></i> </td>
									<td><i class="post fa fa-star"></i> </td>
									<td><i class="post fa fa-star-o"></i> </td>
									</td>
								</tr>
								<tr>
									<td><strong>French:</strong></td>
									<td><i class="post fa fa-star"></i> </td>
									<td><i class="post fa fa-star"></i> </td>
									<td><i class="post fa fa-star"></i> </td>
									<td><i class="post fa fa-star-o"></i> </td>
									<td><i class="post fa fa-star-o"></i> </td>
									</td>
								</tr>
								<td><strong>German:</strong></td>
									<td><i class="post fa fa-star"></i> </td>
									<td><i class="post fa fa-star"></i> </td>
									<td><i class="post fa fa-star-o"></i> </td>
									<td><i class="post fa fa-star-o"></i> </td>
									<td><i class="post fa fa-star-o"></i> </td>
									</td>
								</tr>
						</table>
					</article>
			</div>
			<div id="rightside">
			<article id="skillset">
					<h2>Knowledge and Skills:</h2>
					
						
						<h3>Programming: </h3>
						PHP5 (Object Oriented), Javascript

						<h3>Php- Frameworks: </h3>
						Symfony 2 (+Twig and Doctrine), Laravel 4 and Laravel 5(+Blade and Eloquent)
						<h3>CMS:  </h3>
						Drupal7, Wordpress
						<h3>Markup Languages: </h3>
						HTML5, CSS3, Javascript libraries: jQuery
						<h3>Database:  </h3>
						MySQL
						<h3>Version Control: </h3>
						Git, Bitbucket
						<h3>Servermanagement: </h3>
						AMP-stacks e Unix
						<h3>App Tools, IDE: </h3>
						Notepad++, Sublime Text 3, Dreamweaver
						<h3>Project Methods: </h3>
						Scrum, Agile
						<h3>Front-end, tools and others: </h3>
						Bootstrap, Foundation, Responsive Webdesign (Media Queries), Fonts, Google Webmaster Tools, Google Analytics, Opencart, Zencart, Drupal Commerce, Photoshop Cs5.1
						<h3>Operating Systems: </h3>
							Windows 7, 8 plus Osx
	

				</article>		

			</div>

<!--
			<div id="">
			<article  id='work'>
				<section>
					<h2>Workexperience:</h2>
						<p>
						<strong>Different jobs as a temporary employee</strong> 2008 - 2013<br>
						Orderpicker<br>
						Carjockey<br>
						Stockkeeper<br>
						</p>
						<p>
						<strong>Bakery Sint-Trudo</strong> 2004 - 2013<br>
						Preparing pastries, cold and hot<br>
						Finishing of the wares, like cakes, pastries<br>
						Housekeeping - Maintenance
						</p>					
				</section>

				
					<section>
						<h3>Hobbies</h3>
							<p>
							Games<br/>
							Football<br/>
							Jogging<br/>
							And of course... webdevelopment!<br>				
							</p>
					</section>					
	
				</section>
			</article>
			</div>
-->
		</div><!--end Content-->
	@stop

	@section('scripts')

	<script src="/js/viewportchecker.js"></script>

	<script type="text/javascript">
	jQuery(document).ready(function() {

		jQuery('.post').addClass("hidden").viewportChecker({
	    	classToAdd: 'visible animated bounce', // Class to add to the elements when they are visible
	    	offset: 200  
	   	});
	   	
	});            
	</script>

	@stop	