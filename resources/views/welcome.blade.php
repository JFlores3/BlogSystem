<!DOCTYPE html>
<html>
<head>
	<title>Welcome to My Blog Spot!</title>
</head>
<body style="background-color: #F5F5F5; font-family: 'Helvetica Neue', sans-serif; font-size: 18px;">
  <div style="max-width: 800px; margin: 0 auto; padding: 40px;">
    <h1 style="text-align: center; font-size: 48px; color: #444; margin-bottom: 40px;">Welcome to My Blog Spot!</h1>
    <div style="text-align: center;">
      <img src="https://i.imgflip.com/6u9z6.jpg" alt="meme 1" style="display: inline-block; margin: 20px;">
      <img src="https://i.imgflip.com/6u9y9.jpg" alt="meme 2" style="display: inline-block; margin: 20px;">
      <img src="https://i.imgflip.com/6u9xy.jpg" alt="meme 3" style="display: inline-block; margin: 20px;">
    </div>
    <p style="text-align: center; margin-top: 40px; color: #777;">Thanks for visiting! I hope these memes brighten your day.</p>
    <p style="text-align: center; margin-top: 40px;">Feel free to browse around and check out my content!</p>
    <div style="text-align: center; margin-top: 40px;">
      @auth
        <a href="{{ url('/home') }}">Home</a>
      @else
        <a href="{{ route('login') }}">Log in</a>
        @if (Route::has('register'))
          <a href="{{ route('register') }}">Register</a>
        @endif
      @endauth
    </div>
  </div>
</body>
</html>
