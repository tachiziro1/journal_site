<p>
    <b>商品名：{{$article->title}}</b>
</p>
<p>
<b>商品詳細：{{$article->body}}</b>
</p>

<a href="articles"><button>一覧に戻る</button>
<a href="/articles/{{ $article->id }}/edit"><button>編集する</button></a>
<form action="/articles/{{ $article->id }}" method="post">
    @csrf
    @method('DELETE')
    <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};">
    
</form>