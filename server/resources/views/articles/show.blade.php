<p>
    <b>論文タイトル：{{$article->title}}</b>
</p>
<p>
    <b>本文：{{$article->body}}</b>
</p>
<div>
<a href="/"><button>一覧に戻る</button>
</div>
<div>
<a href="/articles/{{ $article->id }}/edit"><button>編集する</button></a>
</div>
<div>
    <form action="/articles/{{ $article->id }}" method="post">
@csrf
@method('DELETE')
<input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};">

</form>
</div>