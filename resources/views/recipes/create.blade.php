<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1>Food Name</h1>
        <form action="/recipes" method="POST"  enctype="multipart/form-data">
            @csrf
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="recipe[name]" placeholder="料理名"/>
            </div>
            <div class="taste">
                <h2>Taste</h2>
                <select name="recipe[taste_id]">
                    @foreach($tastes as $taste)
                        <option value="{{ $taste->id }}">{{ $taste->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="balance">
                <h2>Balance</h2>
                <select name="recipe[balance_id]">
                    @foreach($balances as $balance)
                        <option value="{{ $balance->id }}">{{ $balance->name }}</option>
                    @endforeach
                </select>
            </div>
                <input type="file" name="image">
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>