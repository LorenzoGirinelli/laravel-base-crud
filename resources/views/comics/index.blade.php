<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>comicsssssss</h1> -->

     @foreach ($comics as $comic)
        <div>
            <h2>{{ $comics->title }}</h2>
            <div>Tipo: {{ $comics->type }}</div>
        </div>
    @endforeach
</body>
</html>