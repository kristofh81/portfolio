
		$.getJSON('data.json' , function(data) {
			var output= '<ul id="results" class="results">';
			$.each(data,function(key,val) {
				output += '<li>';
				output += '<h2>'+ val.title+'</h2>';				
				output += '<image src="'+ val.image+'">';
				output += '<h4>'+ val.tags+'</h4>';
				output += '<h4>'+ val.description+'</h4>';
				output += '</li>';
			});
			
			output += '</ul>';
			$('#carousel').html(output);


			$('#results').cycle({
	   		fx: 'fade',
	   		speed : 500,
	   		timeout: 10000,
	   		next: '#btnright',
	   		prev: '#btnleft'
	   		});
		});



