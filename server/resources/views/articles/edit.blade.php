<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
