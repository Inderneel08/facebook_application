<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title text="Error - {{ $error }}"></title>
</head>

<body>
    <h1>Error . {{ $error }}</h1>
    <p>{{ $mesage }}</p>
    <a href="{{ Auth::check() ? '/' : '/home' }}">Go Back to Home</a>
</body>

</html>
