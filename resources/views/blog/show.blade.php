@extends('layouts.app')
@section('title', 'Home & Portofolio')
@section('content')
<section class="mx-auto max-w-6xl w-full min-h-screen flex flex-col justify-start mt-8">
    <h1 class="text-4xl font-black">{{ $post->title }}</h1>
    <h3 class="mt-4 font-semibold text-lg">Kategori: {{ $post->category->name }}</h3>
    <p class="font-semibold text-sm mt-2">Tags: <span></span></p>
    <img src="" alt="thumbnail" class="mt-5 w-full border h-[250px]">
    <article class="flex flex-col gap-5 mt-4">
        {{$post->body}}
    </article>
    <a href="javascript:history.back()" class="mt-5 w-fit bg-amber-600 hover:bg-amber-700 p-2 ml-2 rounded-lg font-bold text-xs text-white">← Kembali</a>
</section>
@endsection