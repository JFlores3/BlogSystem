<!DOCTYPE html>
<html>
<head>
	<title>Welcome to the Blog!</title>
	<style>
		body {
			background-color: #F1F9FF;
			font-family: 'Helvetica Neue', sans-serif;
			font-size: 18px;
		}
        .container {
		background-color: #FFFFFF;
		border-radius: 10px;
		box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
		margin: 0 auto;
		max-width: 800px;
		padding: 40px;
		text-align: center;
		margin-top: 50px;
	}

	h1 {
		color: #444;
		font-size: 36px;
		margin-bottom: 40px;
	}

	.navbar {
		background-color: #0099FF;
		color: #FFFFFF;
		display: flex;
		align-items: center;
		justify-content: space-between;
		padding: 20px;
		position: fixed;
		top: 0;
		left: 0;
		width: 100%;
		z-index: 1;
	}

	.navbar a {
		color: #FFFFFF;
		font-size: 20px;
		margin-right: 20px;
		text-decoration: none;
	}

	.navbar a:hover {
		text-decoration: underline;
	}

	.card {
		background-color: #FFFFFF;
		border-radius: 10px;
		box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
		margin: 40px auto;
		padding: 20px;
		text-align: center;
		max-width: 400px;
	}

	.card a {
		display: block;
		background-color: #0099FF;
		color: #FFFFFF;
		font-size: 24px;
		font-weight: bold;
		padding: 20px;
		border-radius: 10px;
		margin: 20px auto;
		text-decoration: none;
	}

	.card a:hover {
		background-color: #0066CC;
	}

    .navbar button {
    margin-left: auto;
}
</style>
</head>
<body>
	<!-- resources/views/layouts/app.blade.php -->

<!-- ... -->
<nav class="navbar">
  <a href="#">Home</a>
  <a href="#">About</a>
  <a href="#">Contact</a>
  @auth
    <form method="POST" action="{{ route('logout') }}">
      @csrf
      <button type="submit" class="btn btn-danger">Logout</button>
    </form>
  @else
    <a href="{{ url('/login') }}" class="btn btn-link">Login</a>
  @endauth
</nav>
<!-- ... -->

	<div class="container">
		<h1>Welcome to the Blog!</h1>

		<div class="card">
			<a href="{{ url('/posts/create') }}">Create Post</a>
			<a href="{{ url('/posts') }}">Show Posts</a>
			<a href="{{ url('/my-posts') }}">My Posts</a>
		</div>
	</div>
</body>
</html>
