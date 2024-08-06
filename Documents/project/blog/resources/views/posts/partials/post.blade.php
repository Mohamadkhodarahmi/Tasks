

<div
  class="bg-image card shadow-1-strong"

>
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
  <div class="card-body text-white">
      <h4 class="card-title">
                  {{ $post->title }}
              </h4>
    <p class="card-text">
        Posted by: <b>{{ $post->owner->name }}</b> on {{ $post->created_at}}
    </p>

      <p class="card-text my-2">
                  {{ $post->body }}
              </p>
  </div>
    </div>
</div>

