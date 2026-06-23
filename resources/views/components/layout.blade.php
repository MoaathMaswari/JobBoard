<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title ?? 'No Title'}}</title>
</head>
<body>
    <h1>Job Board</h1>
    <a href="/">Home</a>
    <a href="/about">About</a>
    <a href="/contact">Cotact</a>

    {{$slot}}

</body>
</html>
