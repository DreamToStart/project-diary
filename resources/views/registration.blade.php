<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<h1 id='header'>Project Diary</h1>
	<div id="nav">
		<ul>
            
                 <a href="{{URL('/home')}}"><li>Home</li></a>
                <a href="{{URL('/DeveloperInformation')}}"><li>Developer Information</li></a>
                
            </ul>
		
	</div>



	<link rel="stylesheet" type="text/css" href="{{ asset('css/reg.css') }}">
</head>
<body style="background: whitesmoke">
	@if(count($errors)>0)
	<div class="error">
		<ul>
			@foreach($errors->all() as $errors)
			<li>{{$errors}}</li>
			@endforeach
		</ul>
	</div>
	@endif
	<div id="formdiv">
	
		<form action="{{URL('/registration')}}" method="post">
		

		<label>First Name:</label>
		<input type="text" name="first_name"/><br><br>
		<label>Last Name:</label>
		<input type="text" name="last_name"/><br><br>
		<label>Institution:</label>
		<input type="text" name="inst"/><br><br>
		<label>Email:</label>
		<input type="text" name="email"/><br><br>
		<label>Password:</label>
		<input type="password" name="password"/><br><br>
		<label>Confirm Password:</label>
		<input type="password" name="password_confirmation"/><br><br>
		<label> Account Type:</label><br>
		<label>Student</label>
		<input type="radio" name="acctype" value="Student" checked="">
		<label>Instructor</label>
		<input type="radio" name="acctype" value="Instructor" checked=""><br><br>
		<input type="submit" name="submit" value="Register"/>
		<input type="hidden" name="_token" value="{{Session::token()}}">

			
		</form>
	</div>

</body>
</html>
