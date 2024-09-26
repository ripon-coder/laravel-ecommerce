<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .container {
            margin: 0 auto;
            width: 500px;
            height: 500px;
            outline: 1px solid;
            margin-top: 20px;
        }

        .container form {
            display: flex;
            justify-content: center;
            text-align: center;
            align-items: center;
            padding-top: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="/test" method="post">
            @csrf
            <input type="text" name="text" value="{{old('text')}}">
            <input type="submit" value="Submit">
        </form>
    </div>
</body>

</html>