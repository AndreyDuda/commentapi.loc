<ul>

@foreach($comments as $comment)


        <li>{{$comment->id . ' - ' . $comment->comment . ' ' .$comment->id_parent}}</li>
    @if($comment->children)

            @include('index.components.comments_tree', ['comments' => $comment->children])
    @endif

@endforeach
</ul>
