@extends('layouts.app')

@section('content')
<section class="container mx-auto px-6 py-12 pt-28">
    <nav class="flex mb-5" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li><a href="{{ route('home') }}" class="text-gray-500 hover:text-blue-600">Beranda</a></li>
            <li><span class="mx-2 text-gray-400">/</span></li>
            <li><a href="{{ route('news') }}" class="text-gray-500 hover:text-blue-600">Berita</a></li>
            <li><span class="mx-2 text-gray-400">/</span></li>
            <li class="text-gray-700 truncate">{{ $news->title }}</li>
        </ol>
    </nav>

    <h1 class="text-3xl font-bold mb-4">{{ $news->title }}</h1>
    <p class="text-gray-500 text-sm mb-6">
        Diterbitkan: {{ $news->published_at ? \Carbon\Carbon::parse($news->published_at)->format('d F Y') : 'Tanggal tidak tersedia' }}
    </p>

    @if($news->image)
        <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}" 
             class="w-full max-h-[400px] object-cover rounded-lg mb-6">
    @endif

    <div class="prose max-w-none mt-8">
        {!! $news->content !!}
    </div>

    @if($recentNews->count() > 0)
    <div class="mt-12 pt-8 border-t">
        <h3 class="text-xl font-bold mb-6">Berita Lainnya</h3>
        
        <div class="grid md:grid-cols-3 gap-6">
            @foreach($recentNews as $item)
                <div class="bg-white shadow rounded-lg overflow-hidden">
                    @if($item->image)
                        <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" 
                             class="w-full h-40 object-cover">
                    @else
                        <div class="w-full h-40 bg-gray-200 flex items-center justify-center">
                            <span class="text-gray-500">No Image</span>
                        </div>
                    @endif
                    <div class="p-4">
                        <h4 class="font-semibold mb-2">{{ $item->title }}</h4>
                        <p class="text-gray-500 text-sm mb-2">
                            {{ $item->published_at ? \Carbon\Carbon::parse($item->published_at)->format('d F Y') : 'Tanggal tidak tersedia' }}
                        </p>
                        <a href="{{ route('news.detail', $item->id) }}" class="text-blue-600 hover:underline">
                            Baca Selengkapnya
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @endif
</section>
@endsection