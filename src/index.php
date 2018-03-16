<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Weather Spy -- Are you sure it's sunny skies?</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">


<style>

	html, body {
		height: 100%;
	}
	.container {
		background-image:url("background.jpg");
		width: 100%;
		height: 100%;
		background-size:cover;
		background-position: center;
		padding-top: 100px;
	}
	.center{
		text-align: center;
	}
	.white {
		color:white;
	}

	h3{
		/*padding-top: 15px;*/
		padding-bottom: 15px;
	}
	button {
		margin-top: 20px;
		margin-bottom: 20px;
	}

	.alert {
		margin-top: 20px;
		display: none;
	}

	.bold {
		color: blue;
		font-weight: bold;
	}

	.italic {
		font-style: italic;
	}
</style>
  </head>
  <body>
  	<div class="container">
  		<div class="row">
  			<div class="col-md-6 col-md-offset-3 center">
  				
  					<h1 class="center bold">Weather Spy</h1>
  					<h3 class="italic">Is there a storm coming? One way to find out.</h3>
  					<p class="lead center white">Enter your city below to get a weather forecast.</p>
  					<form>
  						<div class="form-group">
  							<input type="text" class="form-control" name="city" id="city" placeholder="Eg. London, Paris, San Francisco..." />
  							
  						</div>
  						<button id="findWeather" class="btn btn-success btn-lg">Find Weather</button>
  					</form>
  				
  			<div id="success" class="alert alert-success">Success!</div>
  			<div id="fail" class="alert alert-danger">Could not find city. Please try again.</div>

  			<div id="none" class="alert alert-danger">Please enter a city.</div>
  			</div>
  			
  		</div>
  	</div>
  	
<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>	


<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
	$("#findWeather").click((event)=>{
		event.preventDefault();

		$(".alert").hide();

		if($("#city").val()!="") {
			$.get("scraper.php?city="+$("#city").val(), (data)=>{

				if (data==""){
					
					$("#fail").fadeIn();
				}else {
					
					$("#success").html(data).fadeIn();
				}

			});
		} else {
			
			$("#none").fadeIn();
		}
	});
</script>
</body>
</html>