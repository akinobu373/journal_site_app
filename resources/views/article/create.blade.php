<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h1>新規論文投稿</h1>
    <form action="/articles" method="post">
        @csrf
        <p>
            <label for="title">論文タイトル</label>
            <input type="text" name="title">
        </p>
        <p>
            <label for="body">本文</label>
            <input type="text" name="body">
        </p>
        <input type="submit" value="登録">
    </form>
</body>

</html>