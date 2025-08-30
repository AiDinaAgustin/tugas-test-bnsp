@extends('layouts.app')

@section('content')

    {{-- Hero Section --}}
    <section class="relative bg-cover bg-center h-[250px] flex items-center justify-center text-white"
        style="background-image: url('{{ asset('images/hero-contact.jpg') }}')">
        <div class="bg-black bg-opacity-50 p-6 rounded-lg text-center">
            <h1 class="text-3xl md:text-4xl font-bold">Kontak Kami</h1>
            <p class="mt-2 text-sm md:text-base">Jika Memiliki Pertanyaan Bisa Langsung Isi Form di Bawah Ini</p>
        </div>
    </section>

    {{-- Form Kontak --}}
    <section class="container mx-auto px-6 py-12">
        @if(session('success'))
            <div class="mb-6 p-4 bg-green-100 text-green-700 rounded-lg">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('contact.submit') }}" method="POST" class="grid grid-cols-1 gap-6 max-w-2xl mx-auto">
            @csrf
            <div>
                <label for="name" class="block mb-1 font-semibold">Nama</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}"
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-400">
                @error('name') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label for="email" class="block mb-1 font-semibold">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}"
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-400">
                @error('email') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label for="phone" class="block mb-1 font-semibold">No Telp</label>
                <input type="text" id="phone" name="phone" value="{{ old('phone') }}"
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-400">
                @error('phone') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label for="message" class="block mb-1 font-semibold">Isi Pesan</label>
                <textarea id="message" name="message" rows="5"
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-400">{{ old('message') }}</textarea>
                @error('message') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                    Kirim
                </button>
            </div>
        </form>
    </section>

    {{-- Maps Section --}}
    <section class="container mx-auto px-6 pb-12">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.542856939517!2d106.91193511477038!3d-6.579603695237194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e683701d3b9db5f%3A0x8e1bbdb58b2e1f37!2sSMP%20Negeri%201%20Cibadak!5e0!3m2!1sid!2sid!4v1630666620000!5m2!1sid!2sid"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy">
        </iframe>
    </section>

@endsection
