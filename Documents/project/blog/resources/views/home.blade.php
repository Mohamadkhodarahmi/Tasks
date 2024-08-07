@extends('layouts.app')

@section('content')

    <div class="clearfix">
        <h2 class="float-left">List of all projects</h2>


        <a href="{{ route('posts.create') }}" class="btn btn-secondary float-right">Create new post</a>
    </div>
    <div class="my-2 ">
        <a href="{{ route('deleted',auth()->id()) }}" class="btn btn-secondary float-right">restore deleted post</a>
    </div>


    @forelse ($posts as $post)
        <div class="card m-2 shadow ">
            <div class="card-body">


                <h4 class="card-title">
                    <a class="btn btn-info " href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
                </h4>

                <p class="card-text">


                    <small class="float-left">By: {{ $post->owner->name }}</small>


                    <small class="float-right text-muted">{{ $post->created_at->format('M d, Y h:i A') }}</small>


                    @if (auth()->id() == $post->owner->id )

                        <small class="float-right mr-2 ml-2">
                            <a  href="{{ route('posts.edit', $post->id) }}" class="btn btn-outline-success float-right">edit your post</a>
                            <a  href="{{ route('delete', $post->id) }}" class="btn btn-outline-danger float-right">delete your post</a>
                        </small>
                    @endif
                </p>
            </div>
        </div>
    @empty
        <p>No posts yet</p>
    @endforelse

@endsection
