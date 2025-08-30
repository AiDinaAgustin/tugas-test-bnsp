@extends('layouts.app')

@section('content')

    {{-- Hero Section --}}
    <section class="relative bg-cover bg-center h-[500px] flex items-center justify-center text-white pt-16"
             style="background-image: url('{{ asset('sekolah.png') }}')">
        <div class="bg-black bg-opacity-50 p-6 rounded-lg text-center">
            <h1 class="text-3xl font-bold mb-4">MOTTO</h1>
            <p class="max-w-2xl mx-auto">
                SMPN 1 Cibadak (Cerdas Beretika) Ceria, Empati, Rasional, Damai, Aktif, Sabar, Bersih, Elok,
                Tulus, Iman, Konsisten, Amanah.
            </p>
            <a href="/kontak" class="mt-6 inline-block bg-blue-600 px-6 py-2 rounded-lg hover:bg-blue-700">
                Contact Us
            </a>
        </div>
    </section>

    {{-- Sambutan Kepala Sekolah --}}
    <section class="container mx-auto px-6 py-16 grid md:grid-cols-2 gap-8">
        <div>
            <img src="{{ asset('kepala-sekolah.png') }}" alt="Kepala Sekolah" class="rounded-lg shadow">
        </div>
        <div class="flex flex-col justify-center">
            <h2 class="text-2xl font-bold mb-4">Sambutan Kepala Sekolah SMP Negeri 1 Cibadak</h2>
            <p class="text-gray-700">
                Puji dan syukur mari kita panjatkan ke hadirat Allah SWT, Tuhan Yang Maha Esa, yang senantiasa dengan
                kasih dan sayang-Nya melimpahkan berbagai nikmat dan karunia kepada kita semua. Shalawat serta salam
                semoga tetap tercurah kepada junjungan kita Nabi Muhammad SAW, keluarga, sahabat, dan para pengikutnya
                hingga akhir zaman.
            </p>
            <p class="text-gray-700">
                Dengan rasa bangga dan penuh rasa syukur, saya menyambut kehadiran Anda di website resmi [Nama Sekolah],
                sebuah media informasi dan komunikasi yang kami hadirkan untuk memperkenalkan profil sekolah, kegiatan,
                serta berbagai pencapaian yang telah diraih.
            </p>
        </div>
    </section>

        {{-- Gallery --}}
    <section class="bg-gray-100 py-16">
        <div class="container mx-auto px-6">
            <h2 class="text-2xl font-bold text-center mb-10">Gallery</h2>
            <div class="grid md:grid-cols-3 gap-6">
                @forelse($galleryImages as $item)
                    <div class="block overflow-hidden rounded-lg shadow">
                        <div class="relative h-60">
                            <img src="{{ asset('storage/' . $item['image']) }}" 
                                 alt="{{ $item['title'] }}" 
                                 class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end">
                                <div class="p-4 text-white">
                                    <h3 class="font-medium">{{ $item['title'] }}</h3>
                                    <p class="text-sm opacity-80">
                                        {{ ucfirst($item['type']) }} - {{ $item['date']->format('d M Y') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-3 p-8 bg-white rounded-lg shadow text-center">
                        <p>No gallery images available yet.</p>
                    </div>
                @endforelse
            </div>
            <div class="text-center mt-8">
                <a href="{{ route('activities') }}" class="inline-block px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 mx-2">
                    Lihat Kegiatan
                </a>
                <a href="{{ route('news') }}" class="inline-block px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 mx-2">
                    Lihat Berita
                </a>
            </div>
        </div>
    </section>

@endsection
