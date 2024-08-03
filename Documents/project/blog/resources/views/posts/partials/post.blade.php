<div class="card shadow">
    <div class="card-body">


        <h4 class="card-title">
            {{ $post->title }}
        </h4>


        <small class="text-muted">
            Posted by: <b>{{ $post->owner->name }}</b> on {{ $post->created_at}}
        </small>


        <p class="card-text">
            {{ $post->body }}
        </p>

        <hr>

    </div>
</div>
