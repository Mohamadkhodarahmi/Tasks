@props(['post'])

<div class="card m-2 shadow-sm">
    <div>
        <h4>
            <a href="{{route('posts.show',$post->id)}}">{{$post->title}}</a>
        </h4>
        <p>
            <small>By:{{$post->owner->name}}</small>
            <small>{{$post->created_at}}</small>
            @if(auth()->id() == $post->owner->id)
                <small>
                    <a href="{{route('posts.edit',$post->id)}}"></a>
                </small>
            @endif
        </p>
    </div>
</div>
