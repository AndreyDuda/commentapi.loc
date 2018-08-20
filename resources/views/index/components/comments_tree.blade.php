<ul>
@foreach($comments as $comment)
    <li>{{$comment->created_at . ' - ' . $comment->text}}</li>
    @if($comment->children)
            @include('index.components.comments_tree', ['comments' => $comment->children])
    @endif
@endforeach
</ul>
