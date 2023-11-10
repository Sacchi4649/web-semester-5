<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <title>Game Register</title>
</head>
<body>
    <div class="container pt-4 bg-white">
        <div class="row">
            <div class="col-md-8 col-xl-6">
                <h1>Register Your Game</h1>
                <hr>
                <form action="{{ route('games.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="item_code">Item Code</label>
                    <input type="text" id="item_code" name="item_code" class="form-control @error('item_code') is-invalid @enderror" 
                    value="{{ old('item_code') }}">
                  @error('item_code')  
                  <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label" for="title">Title</label>
                    <input type="text" id="title" name="title" class="form-control @error('title') is-invalid @enderror" 
                    value="{{ old('title') }}">
                  @error('title')  
                  <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>

                
                <div class="mb-3">
                    <label class="form-label" for="price">Price</label>
                    <input type="text" id="price" name="price" class="form-control @error('price') is-invalid @enderror" 
                    value="{{ old('price') }}">
                    @error('price')  
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label class="form-label" for="release_date">Release Date</label>
                    <input type="text" id="release_date" name="release_date" class="form-control @error('release_date') is-invalid @enderror" 
                    value="{{ old('release_date') }}">
                    @error('release_date')  
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label class="form-label" for="rating">Rating</label>
                    <input type="text" id="rating" name="rating" class="form-control @error('rating') is-invalid @enderror" 
                    value="{{ old('rating') }}">
                    @error('rating')  
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label" for="store_platform">Store Platform</label>
                    <div class="d-flex">
                        <div class="form-check me-3">
                            <input type="radio" class="form-check-input" name="store_platform" id="steam" value="steam"
                            {{ old('store_platform')=='steam' ? 'checked':'' }}>
                            <label class="form-check-label" for="steam">Steam</label>
                        </div>
                        <div class="form-check me-3">
                            <input type="radio" class="form-check-input" name="store_platform" id="epicgames" value="epicgames"
                            {{ old('store_platform')=='epicgames' ? 'checked':'' }}>
                            <label class="form-check-label" for="epicgames">Epic Games</label>
                        </div>
                        @error('store_platform')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Daftar</button>
                <a href="{{ url()->previous() }}" class="btn btn-success">Kembali</a>
            </form>
        </div>
    </div>
    </div>
</body>
</html>