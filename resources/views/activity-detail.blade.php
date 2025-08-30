@extends('layouts.app')

@section('content')
<section class="container mx-auto px-6 py-12 pt-28">
    <nav class="flex mb-5" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li><a href="{{ route('home') }}" class="text-gray-500 hover:text-blue-600">Beranda</a></li>
            <li><span class="mx-2 text-gray-400">/</span></li>
            <li><a href="{{ route('activities') }}" class="text-gray-500 hover:text-blue-600">Kegiatan</a></li>
            <li><span class="mx-2 text-gray-400">/</span></li>
            <li class="text-gray-700 truncate">{{ $activity->title }}</li>
        </ol>
    </nav>

    <h1 class="text-3xl font-bold mb-4">{{ $activity->title }}</h1>
    <p class="text-gray-500 text-sm mb-6">Tanggal: {{ \Carbon\Carbon::parse($activity->date)->format('d F Y') }}</p>

    @if($activity->image)
        <img src="{{ asset('storage/' . $activity->image) }}" alt="{{ $activity->title }}" 
            class="w-full max-h-[400px] object-cover rounded-lg mb-6">
    @endif

    <div class="prose max-w-none mt-8">
        {!! $activity->description !!}
    </div>
</section>
@endsection