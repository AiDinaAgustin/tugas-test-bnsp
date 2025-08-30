@extends('layouts.app')

@section('content')

    {{-- Hero Section --}}
    <section class="relative bg-cover bg-center h-[500px] flex items-center justify-center text-white"
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
            Puji dan syukur mari kita panjatkan ke hadirat Allah SWT, Tuhan Yang Maha Esa, yang senantiasa dengan kasih dan sayang-Nya melimpahkan berbagai nikmat dan karunia kepada kita semua. Shalawat serta salam semoga tetap tercurah kepada junjungan kita Nabi Muhammad SAW, keluarga, sahabat, dan para pengikutnya hingga akhir zaman.
            </p>
            <p class="text-gray-700">
            Dengan rasa bangga dan penuh rasa syukur, saya menyambut kehadiran Anda di website resmi [Nama Sekolah], sebuah media informasi dan komunikasi yang kami hadirkan untuk memperkenalkan profil sekolah, kegiatan, serta berbagai pencapaian yang telah diraih.
            </p>
        </div>
    </section>

    {{-- Profil Sekolah --}}
    <section class="bg-gray-100 py-16">
        <div class="container mx-auto px-6">
            <h2 class="text-2xl font-bold text-center mb-10">Profil Sekolah</h2>
            <div class="grid md:grid-cols-4 gap-6">
                <div class="p-6 bg-white rounded-lg shadow">Fasilitas</div>
                <div class="p-6 bg-white rounded-lg shadow">Lokasi</div>
                <div class="p-6 bg-white rounded-lg shadow">Sejarah</div>
                <div class="p-6 bg-white rounded-lg shadow">Prestasi</div>
            </div>
        </div>
    </section>

    {{-- Berita dan Agenda --}}
    <section class="container mx-auto px-6 py-16">
        <h2 class="text-2xl font-bold mb-6">Berita dan Agenda</h2>
        <div class="grid md:grid-cols-2 gap-6">
            <div class="bg-white rounded-lg shadow p-4">Berita 1</div>
            <div class="bg-white rounded-lg shadow p-4">Agenda 1</div>
        </div>
    </section>

    {{-- Gallery --}}
    <section class="bg-gray-100 py-16">
        <div class="container mx-auto px-6">
            <h2 class="text-2xl font-bold text-center mb-10">Gallery</h2>
            <div class="grid md:grid-cols-3 gap-6">
                <img src="{{ asset('images/gallery1.jpg') }}" class="rounded-lg shadow" alt="">
                <img src="{{ asset('images/gallery2.jpg') }}" class="rounded-lg shadow" alt="">
                <img src="{{ asset('images/gallery3.jpg') }}" class="rounded-lg shadow" alt="">
            </div>
        </div>
    </section>

@endsection
