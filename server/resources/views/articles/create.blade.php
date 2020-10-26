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

<h1>論文投稿フォーム</h1>
<form action="/articles" method="post">
@csrf
    <p>
        論文タイトル：<br>
        <input type="string" name="title" value="{{ old('title') }}">
    </p>
    <p>
        本文<br>
<textarea class="form-control" type="text" name="body" value="{{ old('body') }}"></textarea>  
    </p>
    <input type="submit" value="登録">
</form>
</body>
<a href="/"><button>戻る</button></a>