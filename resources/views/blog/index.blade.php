@extends('layouts.app')
@section('title', 'Daftar Artikel Blog')
@section('content')
<section class="mx-auto max-w-6xl w-full min-h-screen flex flex-col justify-center">
    <div class="flex w-full justify-between items-center mt-8">
        <h3 class="text-emerald-900 text-2xl font-bold">Daftar Semua Artikel</h3>
        <a href="" class="bg-amber-600 hover:bg-amber-700 p-3 mr-2 rounded-lg font-bold text-white">Filter</a>
    </div>
    <div class="grid grid-cols-3 gap-8 mt-10">
        <div class="bg-white shadow-md py-15 px-8 rounded-lg">
            <img src="" alt="thumbnail" class="h-[200px] border">
            <h4 class="text-xl font-black mt-5">Judul Artikel</h4>
            <p class="text-sm mt-2 mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, aliquam!</p>
            <a href="{{ route('blog.show', 'belajar-dasar-laravel') }}" class="hover:underline font-bold text-blue-600">
                Baca Selengkapnya →
            </a>
        </div>
        <div class="bg-white shadow-md py-15 px-8 rounded-lg">
            <img src="" alt="thumbnail" class="h-[200px] border">
            <h4 class="text-xl font-black mt-5">Judul Artikel</h4>
            <p class="text-sm mt-2 mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, aliquam!</p>
            <a href="{{ route('blog.show', 'belajar-dasar-laravel') }}" class="hover:underline font-bold text-blue-600">
                Baca Selengkapnya →
            </a>
        </div>
        <div class="bg-white shadow-md py-15 px-8 rounded-lg">
            <img src="" alt="thumbnail" class="h-[200px] border">
            <h4 class="text-xl font-black mt-5">Judul Artikel</h4>
            <p class="text-sm mt-2 mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, aliquam!</p>
            <a href="{{ route('blog.show', 'belajar-dasar-laravel') }}" class="hover:underline font-bold text-blue-600">
                Baca Selengkapnya →
            </a>
        </div>
        <div class="bg-white shadow-md py-15 px-8 rounded-lg">
            <img src="" alt="thumbnail" class="h-[200px] border">
            <h4 class="text-xl font-black mt-5">Judul Artikel</h4>
            <p class="text-sm mt-2 mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, aliquam!</p>
            <a href="{{ route('blog.show', 'belajar-dasar-laravel') }}" class="hover:underline font-bold text-blue-600">
                Baca Selengkapnya →
            </a>
        </div>
        <div class="bg-white shadow-md py-15 px-8 rounded-lg">
            <img src="" alt="thumbnail" class="h-[200px] border">
            <h4 class="text-xl font-black mt-5">Judul Artikel</h4>
            <p class="text-sm mt-2 mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, aliquam!</p>
            <a href="{{ route('blog.show', 'belajar-dasar-laravel') }}" class="hover:underline font-bold text-blue-600">
                Baca Selengkapnya →
            </a>
        </div>
        <div class="bg-white shadow-md py-15 px-8 rounded-lg">
            <img src="" alt="thumbnail" class="h-[200px] border">
            <h4 class="text-xl font-black mt-5">Judul Artikel</h4>
            <p class="text-sm mt-2 mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, aliquam!</p>
            <a href="{{ route('blog.show', 'belajar-dasar-laravel') }}" class="hover:underline font-bold text-blue-600">
                Baca Selengkapnya →
            </a>
        </div>
    </div>
    <div class="flex gap-7 justify-center items-center py-8 mt-8">
        <a href="" class="bg-amber-600 hover:bg-amber-700 p-2 ml-2 rounded-lg font-bold text-xs text-white">Back</a>
        <a href="">1</a>
        <a href="">2</a>
        <a href="">3</a>
        <a href="" class="bg-amber-600 hover:bg-amber-700 p-2 ml-2 rounded-lg font-bold text-xs text-white">Next</a>
    </div>
</section>
@endsection