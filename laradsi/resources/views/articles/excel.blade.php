@foreach($articles as $article)
	<tr>
		 <td>{{ $article->name }}</td>
		 <td>{{ $article->category->name }}</td>
		 <td>{{ $article->content }}</td>
	</tr>
@endforeach