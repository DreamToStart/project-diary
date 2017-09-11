<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<style type="text/css">
		.header{
			width: 100%;
			height: 100px;
			background: black;
		}

		#loggeduser{
		
			color: white;
			font-size: 20px;
		}
	</style>
</head>
<body>

	<div class="header">
		<p id="loggeduser">

		{{Auth::user()->first_name}}
		{{Auth::user()->last_name}} <br>
		<label>Institution: </label>
		{{Auth::user()->inst}} <br>
		<label>Recognition: </label>
		{{Auth::user()->acctype}} <br>
		 </p>
	</div>

	<button onclick="window.location.href='{{URL('/logout')}}';"> LOG OUT </button>


</body>

</html>