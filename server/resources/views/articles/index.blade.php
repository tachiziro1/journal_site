<h1>論文一覧</h1>
<ul>
@foreach ($articles as $article)
    
<li><a href="/articles/{{$article->id}}">{{$article->title}}</a></li>

@endforeach
</ul>
<a href="articles/create"><button>新しい論文を投稿する</button></a>