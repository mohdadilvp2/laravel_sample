<!DOCTYPE html>
<html lang="en">
 <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
      
    </head>
    <body>
<h1>Sign In</h1>
<form method="POST" action="login">
	{!! csrf_field() !!}

	<label>Username</label><input type="text" name="username"><br/><br/>
	<label>Password</label><input type="text" name="password"><br/><br/>
	<input type="submit" name="submit">
	</form>
 


</body>
</html>