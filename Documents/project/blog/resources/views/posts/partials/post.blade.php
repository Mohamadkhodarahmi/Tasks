


    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6) ;border-radius: 10px">
  <div class="card-body text-white my-2">
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


@forelse($post->comments as $comment )
    <x-showcomments :comment="$comment"/>

@empty
    <p>no comments yet</p>
@endforelse
    <form action="{{route('comment',$post->id)}}" method="post">
        @csrf
        <div class="card-footer mb-4 border-0 " style="background-color: #f8f9fa;">
            <div class="d-flex flex-start w-100">
                {{--                <img class="rounded-circle shadow-1-strong me-3"--}}
                {{--                     src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(19).webp" alt="avatar" width="40"--}}
                {{--                     height="40" />--}}
                <div data-mdb-input-init class="form-outline w-100">
                <textarea type="body" name="body" class="form-control" id="body" rows="4"
                          style="background: #fff;" placeholder="Write a comment"></textarea>
                    <label class="form-label" for="body">Message</label>
                </div>
            </div>
            <div class="float-end   pt-1">
                <button  type="submit"  class="btn btn-primary btn-sm">Post comment</button>
            </div>
        </div>
    </form>



