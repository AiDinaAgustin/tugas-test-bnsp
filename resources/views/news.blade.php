@extends('layouts.app')

@section('content')

    {{-- Hero Section --}}
    <section class="relative bg-cover bg-center h-[250px] flex items-center justify-center text-white"
        style="background-image: url('{{ asset('images/hero-news.jpg') }}')">
        <div class="bg-black bg-opacity-50 p-6 rounded-lg text-center">
            <h1 class="text-3xl md:text-4xl font-bold">Berita</h1>
            <p class="mt-2 text-sm md:text-base">Beberapa Berita Pembelajaran SMP Negeri 1 Cibadak</p>
        </div>
    </section>

    {{-- Berita Baru --}}
    <section class="container mx-auto px-6 py-12">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold">Berita Baru</h2>
            <a href="#" class="text-blue-600 hover:underline">See all</a>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
            @foreach($news as $item)
                <div class="bg-white shadow rounded-lg overflow-hidden">
                    <img src="{{ asset('storage/'.$item->thumbnail) }}" alt="{{ $item->title }}" class="w-full h-40 object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold text-lg mb-2">{{ $item->title }}</h3>
                        <p class="text-gray-600 text-sm mb-2 line-clamp-2">{{ $item->excerpt }}</p>
                        <a href="{{ route('news.detail', $item->id) }}" class="text-blue-600 font-medium hover:underline">
                            Read More...
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    {{-- Highlight Berita --}}
    @if($highlight)
    <section class="container mx-auto px-6 py-12">
        <div class="grid md:grid-cols-2 gap-6 items-center">
            <img src="{{ asset('storage/'.$highlight->thumbnail) }}" alt="{{ $highlight->title }}" class="w-full rounded-lg shadow">
            <div>
                <h2 class="text-2xl font-bold mb-3">{{ $highlight->title }}</h2>
                <p class="text-gray-700 mb-4">{{ $highlight->excerpt }}</p>
                <a href="{{ route('news.detail', $highlight->id) }}" 
                   class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                   Read More
                </a>
            </div>
        </div>
    </section>
    @endif

    {{-- Berita Lainnya --}}
    <section class="container mx-auto px-6 py-12">
        <div class="grid md:grid-cols-3 gap-6">
            @foreach($moreNews as $item)
                <div class="bg-white shadow rounded-lg overflow-hidden">
                    <img src="{{ asset('storage/'.$item->thumbnail) }}" alt="{{ $item->title }}" class="w-full h-40 object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold text-lg mb-2">{{ $item->title }}</h3>
                        <p class="text-gray-600 text-sm mb-2 line-clamp-2">{{ $item->excerpt }}</p>
                        <a href="{{ route('news.detail', $item->id) }}" class="text-blue-600 font-medium hover:underline">
                            Read More...
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    {{-- Recent Post --}}
    <section class="container mx-auto px-6 py-12">
        <h2 class="text-xl font-bold mb-4">Recent Post</h2>
        <div class="flex flex-wrap gap-3">
            @foreach($recentPosts as $post)
                <a href="{{ route('news.detail', $post->id) }}"
                   class="px-4 py-2 border border-gray-300 rounded-full text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">
                    {{ $post->title }}
                </a>
            @endforeach
        </div>
    </section>

@endsection
