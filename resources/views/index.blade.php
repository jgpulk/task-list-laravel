<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>
</head>
<body>
    <h1>Welcome to Index Page</h1>
    <br><br>
    @isset($name)
        The author of this project is {{ $name }}
    @endisset
</body>
</html>