@extends('layouts.app')
@section('title', 'Home & Portofolio')
@section('content')
<section class="mx-auto max-w-6xl w-full min-h-screen flex flex-col justify-start mt-8">
    <h1 class="text-4xl font-black">Judul Artikel Yang Besar</h1>
    <h3 class="mt-4 font-semibold text-lg">Kategori: Web Development</h3>
    <p class="font-semibold text-sm mt-2">Tags: <span></span></p>
    <img src="" alt="thumbnail" class="mt-5 w-full border h-[250px]">
    <article class="flex flex-col gap-5 mt-4">
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit deleniti culpa vitae at assumenda facilis quibusdam unde, quos repudiandae quia veritatis harum, saepe quasi? Aperiam, cupiditate recusandae. Hic nam, rerum veniam vel, dicta accusamus dolore eius similique sed debitis id. Enim voluptas quod quas quaerat earum repellendus, libero dolorum eligendi expedita molestiae pariatur rem, veniam, aperiam ratione? Quod, illo temporibus.</p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam veritatis ratione accusantium aperiam culpa reprehenderit, omnis doloremque incidunt dicta? Similique officiis error velit. Veritatis ut laudantium dolore quam animi odit! Ipsam commodi non nesciunt, vel adipisci labore excepturi sequi consequuntur?</p>
    </article>
    <a href="javascript:history.back()" class="mt-5 w-fit bg-amber-600 hover:bg-amber-700 p-2 ml-2 rounded-lg font-bold text-xs text-white">← Kembali</a>
</section>
@endsection