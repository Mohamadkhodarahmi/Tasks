@extends('layouts.app')

@section('content')
    <div class="container">
        <div>
            <h2 class="float-left">
                list of all projects
            </h2>
            @auth
                <a href="{{ url('/home') }}"
                   class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
            @else
                <a href="{{ route('login') }}"
                   class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                    in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                       class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                @endif
            @endauth


        </div>

        @forelse($posts as $post )
            <x-product-component :post="$post"/>

    @empty
        <p>no posts yet</p>
    @endforelse
    </div>
    {{ $posts->links('pagination::bootstrap-5') }}
@endsection


