<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</head>
<body>

{{-- @if (count($errors)>0)
    <p><b>{{count($errors)}}件のエラーがあります</b></p>
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
@endif --}}

<h1>論文更新フォーム</h1>
<!--更新先はarticlesのidにしないと増える php artisan rote:listで確認①-->
<form action="/articles/{{ $article->id }}" method="post">
    @csrf
    <!-- resourceの場合PUTを指定してあげないとエラーが起きる php artisan rote:listで確認② -->
    @method('PUT')
    <!-- idはそのまま -->
    <input type="hidden" name="id" value="{{ $article->id }}">
    <p>
        論文タイトル：<br>
        <input type="string" name="title" value="{{ $article->title }}">
    </p>
    <p>
        本文：<br>
    <textarea class="form-control" type="text" name="body" value="{{ $article->body }}">{{ $article->body }}</textarea>
    </p>
    <input type="submit" value="更新">
</body>
</form>
