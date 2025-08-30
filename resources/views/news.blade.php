@extends('layouts.app')

@section('content')

    {{-- Hero Section --}}
    <section class="relative bg-cover bg-center h-[250px] flex items-center justify-center text-white pt-16"
        style="background-image: url('{{ asset('sekolah.png') }}')">
        <div class="bg-black bg-opacity-50 p-6 rounded-lg text-center">
            <h1 class="text-3xl md:text-4xl font-bold">Berita</h1>
            <p class="mt-2 text-sm md:text-base">Berita Terkini SMP Negeri 1 Cibadak</p>
        </div>
    </section>

    {{-- Berita Baru --}}
    <section class="container mx-auto px-6 py-12">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold">Berita Terbaru</h2>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
            @foreach($news as $item)
                <div class="bg-white shadow rounded-lg overflow-hidden">
                    @if($item->image)
                        <img src="{{ asset('storage/'.$item->image) }}" alt="{{ $item->title }}" class="w-full h-40 object-cover">
                    @else
                        <div class="w-full h-40 bg-gray-200 flex items-center justify-center">
                            <span class="text-gray-500">No Image</span>
                        </div>
                    @endif
                    <div class="p-4">
                        <h3 class="font-semibold text-lg mb-2">{{ $item->title }}</h3>
                        <p class="text-gray-500 text-sm mb-2">
                            {{ $item->published_at ? \Carbon\Carbon::parse($item->published_at)->format('d F Y') : 'Tanggal tidak tersedia' }}
                        </p>
                        <p class="text-gray-600 text-sm mb-2 line-clamp-2">
                            {{ Str::limit(strip_tags($item->content), 100) }}
                        </p>
                        <a href="{{ route('news.detail', $item->id) }}" class="text-blue-600 font-medium hover:underline">
                            Selengkapnya...
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    {{-- Highlight Berita --}}
    @if($highlight)
    <section class="bg-gray-100 py-12">
        <div class="container mx-auto px-6">
            <h2 class="text-2xl font-bold mb-6">Sorotan</h2>
            <div class="grid md:grid-cols-2 gap-6 items-center">
                @if($highlight->image)
                    <img src="{{ asset('storage/'.$highlight->image) }}" alt="{{ $highlight->title }}" class="w-full rounded-lg shadow">
                @else
                    <div class="w-full h-64 bg-gray-200 flex items-center justify-center rounded-lg">
                        <span class="text-gray-500">No Image</span>
                    </div>
                @endif
                <div>
                    <h2 class="text-2xl font-bold mb-3">{{ $highlight->title }}</h2>
                    <p class="text-gray-500 text-sm mb-2">
                        {{ $highlight->published_at ? \Carbon\Carbon::parse($highlight->published_at)->format('d F Y') : 'Tanggal tidak tersedia' }}
                    </p>
                    <p class="text-gray-700 mb-4">{{ Str::limit(strip_tags($highlight->content), 150) }}</p>
                    <a href="{{ route('news.detail', $highlight->id) }}" 
                       class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                       Baca Selengkapnya
                    </a>
                </div>
            </div>
        </div>
    </section>
    @endif

    {{-- Berita Lainnya --}}
    @if($moreNews->count() > 0)
    <section class="container mx-auto px-6 py-12">
        <h2 class="text-2xl font-bold mb-6">Berita Lainnya</h2>
        <div class="grid md:grid-cols-3 gap-6">
            @foreach($moreNews as $item)
                <div class="bg-white shadow rounded-lg overflow-hidden">
                    @if($item->image)
                        <img src="{{ asset('storage/'.$item->image) }}" alt="{{ $item->title }}" class="w-full h-40 object-cover">
                    @else
                        <div class="w-full h-40 bg-gray-200 flex items-center justify-center">
                            <span class="text-gray-500">No Image</span>
                        </div>
                    @endif
                    <div class="p-4">
                        <h3 class="font-semibold text-lg mb-2">{{ $item->title }}</h3>
                        <p class="text-gray-500 text-sm mb-2">
                            {{ $item->published_at ? \Carbon\Carbon::parse($item->published_at)->format('d F Y') : 'Tanggal tidak tersedia' }}
                        </p>
                        <p class="text-gray-600 text-sm mb-2 line-clamp-2">{{ Str::limit(strip_tags($item->content), 100) }}</p>
                        <a href="{{ route('news.detail', $item->id) }}" class="text-blue-600 font-medium hover:underline">
                            Selengkapnya...
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    @endif

    {{-- Recent Post --}}
    @if($recentPosts->count() > 0)
    <section class="container mx-auto px-6 py-12">
        <h2 class="text-xl font-bold mb-4">Berita Terkini</h2>
        <div class="flex flex-wrap gap-3">
            @foreach($recentPosts as $post)
                <a href="{{ route('news.detail', $post->id) }}"
                   class="px-4 py-2 border border-gray-300 rounded-full text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600">
                    {{ $post->title }}
                </a>
            @endforeach
        </div>
    </section>
    @endif

@endsection