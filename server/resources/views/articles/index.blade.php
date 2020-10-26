<h1>出品商品一覧</h1>
<ul>
@foreach ($articles as $article)
    
<li><a href="/articles/{{$article->id}}">{{$article->title}}</a></li>

@endforeach
</ul>
<a href="articles/create">出品する</a>