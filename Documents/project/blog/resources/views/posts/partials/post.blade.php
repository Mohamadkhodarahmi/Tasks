
<div class="container mb-4">


    <h4 class="card-title">
        {{ $post->title }}
    </h4>

</div>
<div class="container">

        <small class="text-muted">
            Posted by: <b>{{ $post->owner->name }}</b> on {{ $post->created_at}}
        </small>


        <p class="card-text">
            {{ $post->body }}
        </p>

        <hr>


</div>
