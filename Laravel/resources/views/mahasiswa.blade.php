<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <h1 class="mb-3">Data Mahasiswa</h1>
        <div class="row"></div>
        <div>
            <ol>
                @foreach ($mahasiswa as $value)
                <li> {{$value}}</li>
                @endforeach
            </ol>
        </div>
    </div>
</body>

</html>
