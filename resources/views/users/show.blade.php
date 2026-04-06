@extends('partials.layout')
@section('title', $user->name)
@section('content')
    <div class="mb-4 flex items-center justify-between gap-2">
        <div>
            <h1 class="text-3xl font-bold">{{ $user->name }}</h1>
            <p class="text-sm opacity-70">{{ $user->email }}</p>
        </div>
        <a class="btn" href="{{ route('home') }}">Back</a>
    </div>

    <div class="my-3">
        {{ $posts->links() }}
    </div>

    <div class="grid grid-cols-1 gap-3 md:grid-cols-2">
        @foreach ($posts as $post)
            <div class="card bg-base-300">
                <div class="card-body">
                    <h2 class="card-title">{{ $post->title }}</h2>
                    <p>{{ $post->snippet }}</p>
                    <div class="card-actions justify-end">
                        <a class="btn btn-primary" href="{{ route('post', ['post' => $post]) }}">Read</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="my-3">
        {{ $posts->links() }}
    </div>
@endsection

