<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Belajar Laravel</title>
</head>
<body>
  <nav>
    <a href="{{ route('home') }}">Home</a>
    <a href="{{ route('about') }}">About</a>
    <a href="{{ route('contact') }}">Contact</a>
  </nav>
  {{ $slot }}
</body>
</html>