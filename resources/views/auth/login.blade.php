<!DOCTYPE html>
<html>
<head>
	<title>Login - My Blog Spot</title>
	<style>
		body {
			background-color: #F1F9FF;
			font-family: 'Helvetica Neue', sans-serif;
			font-size: 18px;
		}

		form {
			background-color: #FFFFFF;
			border-radius: 10px;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
			margin: 0 auto;
			max-width: 400px;
			padding: 40px;
			text-align: center;
			margin-top: 50px;
		}

		h1 {
			color: #444;
			font-size: 36px;
			margin-bottom: 40px;
		}

		input[type="email"],
		input[type="password"] {
			background-color: #F5F5F5;
			border: none;
			border-radius: 5px;
			box-sizing: border-box;
			font-size: 18px;
			margin-bottom: 20px;
			padding: 10px;
			width: 100%;
		}

		input[type="submit"] {
			background-color: #0099FF;
			border: none;
			border-radius: 5px;
			color: #FFFFFF;
			cursor: pointer;
			font-size: 18px;
			padding: 10px;
			width: 100%;
		}

		input[type="submit"]:hover {
			background-color: #0077CC;
		}
	</style>
</head>
<body>
	<form action="{{ route('login') }}" method="POST">
		@csrf
		<h1>Login to My Blog Spot</h1>
		<input type="email" name="email" placeholder="Email" required>
		<input type="password" name="password" placeholder="Password" required>
		<input type="submit" value="Log In">
	</form>
</body>
</html>
