<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <title>{{ $game->title }} Data</title>
</head>
<body>
    <div class="container mt-3"></div>
    <div class="row">
        <div class="col-12">
            <div class="pt-3">
                <h1 class="h2">{{ $game->title }} Data</h1>
            </div>
            <hr>
            <ul>
                <li>Item Code: {{ $game->item_code }}</li>
                <li>Title: {{ $game->title}}</li>
                <li>Store Platform: {{ $game->store_platform }}</li>
                <li>Price: {{ $game->price }}</li>
                <li>Release Date: {{ $game->release_date }}</li>
                <li>Rating: {{ $game->rating }}</li>
                <li>Added At: {{ $game->created_at }}</li>
                <li>Updated At: {{ $game->updated_at }}</li>
            </ul>
        </div>
    </div>
</body>
</html>