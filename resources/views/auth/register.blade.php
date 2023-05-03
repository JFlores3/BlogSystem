<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<style>
		body {
			background-color: #F1F9FF;
			font-family: 'Helvetica Neue', sans-serif;
			font-size: 18px;
		}

		.container {
			max-width: 500px;
			margin: 0 auto;
			padding: 40px;
			background-color: #fff;
			border-radius: 10px;
			box-shadow: 0px 0px 10px #888;
		}

		h1 {
			text-align: center;
			font-size: 36px;
			color: #444;
			margin-bottom: 40px;
		}

		form {
			display: flex;
			flex-direction: column;
		}

		label {
			font-weight: bold;
			margin-bottom: 10px;
		}

		input {
			padding: 10px;
			border-radius: 5px;
			border: none;
			margin-bottom: 20px;
		}

		button[type=submit] {
			background-color: #4CAF50;
			color: #fff;
			padding: 10px;
			border-radius: 5px;
			border: none;
			cursor: pointer;
		}

		button[type=submit]:hover {
			background-color: #3e8e41;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Register</h1>
		<form method="POST" action="{{ route('register') }}">
			@csrf

			<label for="name">Name</label>
			<input id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

			<label for="email">Email</label>
			<input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email">

			<label for="password">Password</label>
			<input id="password" type="password" name="password" required autocomplete="new-password">

			<label for="password-confirm">Confirm Password</label>
			<input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">

			<button type="submit">Register</button>
		</form>
	</div>
</body>
</html>
