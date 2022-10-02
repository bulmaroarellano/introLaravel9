@extends('template')
@section('content')
<div class="max-w-3xl mx-auto">
    <h1 class="text-5xl mb-8">{{ $post->title }}</h1>
    <p class="leading-loose text-lg">{{ $post->body }}</p>
    <p>Autor: {{ $post->user->name }}</p>
</div>

@endsection
