@extends('layouts.app')
@section('title', 'Home & Portofolio')
@section('content')
<section class="grid grid-cols-2 min-h-screen items-center justify-center">
    <div class="w-full flex gap-3 justify-center">
        <div class="w-fit">
            <p class="font-semibold text-2xl">Hi! My name is</p>
            <h2 class="text-5xl font-black mt-2">Haiper Alexander</h2>
            <p class="font-semibold text-2xl mt-3">I am <span id="typing-text" class="font-black"></span></p>        
            <div class="mt-10">
                <a href="" class="bg-amber-600 hover:bg-amber-700 p-3 mr-2 rounded-lg font-bold text-white">Portofolio</a>
                <a href="" class="bg-amber-600 hover:bg-amber-700 p-3 ml-2 rounded-lg font-bold text-white">Contact</a>
            </div>
        </div>
    </div>
    <div class="flex w-full justify-center self-end">
        <img src="{{ asset('images/profile-picture.png') }}" alt="my-photo" id="profile-image" class="w-[500px]">
    </div>
</section>
<section class="mx-auto max-w-5xl w-full min-h-screen flex flex-col justify-center">
    <div class="w-full flex justify-between items-center py-3">
        <h3 class="text-emerald-900 text-2xl font-bold">Artikel Terbaru Saya</h4>
        <a href="{{ route('blog.index') }}" class="bg-amber-600 hover:bg-amber-700 px-4 py-1 font-bold rounded-full text-white">Lihat semua artikel</a>
    </div>
    <div class="grid grid-cols-3 gap-8 mt-10">
        @foreach($latestPosts as $post)
        <div class="bg-white shadow-md py-15 px-8 rounded-lg">
            <img src="" alt="thumbnail" class="h-[200px] border">
            <h4 class="text-xl font-black mt-5">{{ $post->title }}</h4>
            <p class="text-sm mt-2 mb-3 text-justify">{{ Str::limit($post->body, 70, '...') }}</p>
            <a href="{{ route('blog.show', $post->slug) }}" class="hover:underline font-bold text-blue-600">
                Baca Selengkapnya →
            </a>
        </div>
        @endforeach
    </div>
</section>
<script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
<script>
    var typed = new Typed('#typing-text', {
        strings: ['CTF Player', 'Web Developer', 'Graphic Designer', 'Photographer'],
        typeSpeed: 80,
        backSpeed: 60,
        backDelay: 2000,
        loop: true
    });
</script>
@endsection