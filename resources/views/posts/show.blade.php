@extends('partials.layout')
@section('title', $post->title)
@section('content')
    <div class="mb-4 flex items-center justify-between gap-2">
        <h1 class="text-3xl font-bold">{{ $post->title }}</h1>
        <div class="join">
            <a href="{{ route('posts.edit', ['post' => $post]) }}" class="btn join-item btn-warning">Edit</a>
            <a href="{{ route('posts.index') }}" class="btn join-item">Back</a>
        </div>
    </div>

    <div class="card bg-base-300">
        <div class="card-body">
            <div class="prose max-w-none whitespace-pre-wrap">{{ $post->body }}</div>

            @if ($post->images?->count())
                <div class="divider">Images</div>
                <div class="grid grid-cols-2 gap-3 md:grid-cols-3">
                    @foreach ($post->images as $image)
                        <div class="card bg-base-200">
                            <figure>
                                <img class="w-full object-cover" src="{{ asset('storage/' . $image->path) }}" alt="" />
                            </figure>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
@endsection

