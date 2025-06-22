<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error - {{ $iwalp }}</title>
</head>

<body>
    <h1>Error {{ $iwalp }}</h1>

    <a href="{{ Auth::check() ? '/' : '/home' }}">Go Back to Home</a>
</body>

</html>