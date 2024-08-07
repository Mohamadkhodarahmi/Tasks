@props(['comment'])

<div class="card m-2 shadow-lg p-2 bg-body-secondary">
    <div>
{{--        <h4>--}}
{{--            <a class="btn text-bg-light shadow-sm" href="{{route('posts.show',$post->id)}}">{{$post->title}}</a>--}}
{{--        </h4>--}}
        <p>{{$comment->body}}</p>
        <p>
            <small>By:{{$comment->user->name}}</small>

{{--            @if(auth()->id() == $post->users->id)--}}
{{--                <small>--}}
{{--                    <a href="{{route('posts.edit',$post->id)}}"></a>--}}
{{--                </small>--}}
{{--            @endif--}}
        </p>
    </div>
</div>
