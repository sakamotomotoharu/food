<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    </head>
     <body>
        <h1>Food Posts</h1>
        <div class='recipes'>
             @foreach ($recipes as $recipe)
                <div class='post'>
                    <h2 class='title'>{{ $recipe->name }}</h2>
                    <p>{{ $recipe->taste->name }}</p>
                    <p>{{ $recipe->balance->name }}</p>
                    <img class='gazou' src={{ $recipe->image_path }}>
                </div>
                [<a href='/recipes/create'>create</a>]
             @endforeach
            </div>
        </div>
    </body>
</html>