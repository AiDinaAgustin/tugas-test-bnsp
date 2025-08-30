@extends('layouts.app')

@section('content')

    {{-- Hero Section --}}
    <section class="relative bg-cover bg-center h-[250px] flex items-center justify-center text-white pt-16"
        style="background-image: url('{{ asset('images/hero-activities.jpg') }}')">
        <div class="bg-black bg-opacity-50 p-6 rounded-lg text-center">
            <h1 class="text-3xl md:text-4xl font-bold">Kegiatan SMP Negeri 1 Cibadak</h1>
            <p class="mt-2 text-sm md:text-base">Beberapa Kegiatan di SMP Negeri 1 Cibadak</p>
        </div>
    </section>

    {{-- Daftar Kegiatan --}}
    <section class="container mx-auto px-6 py-12">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($activities as $activity)
                <div class="bg-white shadow rounded-lg overflow-hidden">
                    <div class="relative h-48">
                        @if($activity->image)
                            <img src="{{ asset('storage/' . $activity->image) }}" alt="{{ $activity->title }}" 
                                class="w-full h-full object-cover">
                        @else
                            <div class="w-full h-full bg-gray-200 flex items-center justify-center">
                                <span class="text-gray-500">No Image</span>
                            </div>
                        @endif
                        <div class="absolute bottom-0 w-full bg-blue-600 bg-opacity-80 px-4 py-2 text-white font-semibold">
                            {{ $activity->title }}
                        </div>
                    </div>
                    <div class="p-4">
                        <p class="text-gray-600 text-sm mb-3">
                            {{ \Carbon\Carbon::parse($activity->date)->format('d F Y') }}
                        </p>
                        <p class="text-gray-700 mb-3 line-clamp-3">
                            {{ Str::limit(strip_tags($activity->description), 100) }}
                        </p>
                        <a href="{{ route('activities.detail', $activity->id) }}" 
                           class="text-blue-600 font-semibold hover:underline">
                            Lihat Kegiatan
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Pagination --}}
        <div class="mt-8 flex justify-center">
            {{ $activities->links() }}
        </div>
    </section>

@endsection