<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <title>Registered Game Data</title>
</head>
<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div class="py-4 d-flex justify-content-between align-items-center">
                    <h2>Games Data Table</h2>
                    <a href="{{ route('games.create') }}" class="btn btn-primary">Add Game</a>
                </div>
                @if(session()->has('message'))
                <div class="alert alert-success">{{ session()->get('message') }}</div>
                @endif
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Item Code</th>
                            <th>Title</th>
                            <th>Store Platform</th>
                            <th>Price</th>
                            <th>Release Date</th>
                            <th>Rating</th>
                            <th>Added At</th>
                            <th>Last Updated</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($games as $game)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $game->item_code }}</td>
                            <td>{{ $game->title }}</td>
                            <td>{{ $game->store_platform == 'steam' ?'Steam':'Epic Games'}}</td>
                            <td>{{ $game->price }}</td>
                            <td>{{ $game->release_date }}</td>
                            <td>{{ $game->rating }}</td>
                            <td>{{ $game->created_at }}</td>
                            <td>{{ $game->updated_at }}</td>
                            <td>
                                <form method="POST" action="{{ route('games.destroy',['game'=>$game->id]) }}">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm" role="button">Delete</button>
                                <a class="btn btn-info btn-sm" href="{{ url('/games/'.$game->id) }}" role="button">Detail</a>
                                <a class="btn btn-success btn-sm" href="{{ url('/games/'.$game->id).'/edit' }}" role="button">Edit</a>
                            </form>
                                
                            </td>
                        </tr>
                            
                        @empty
                            <td colspan="6" class="text-center">No data exists..</td>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>