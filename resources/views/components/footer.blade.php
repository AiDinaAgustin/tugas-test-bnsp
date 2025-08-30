<footer class="bg-gray-900 text-gray-300 mt-16">
    <div class="container mx-auto px-6 py-10 grid md:grid-cols-3 gap-8">
        <!-- Info Sekolah -->
        <div>
            <img src="{{ asset('images/logo.png') }}" class="h-12 mb-3" alt="Logo Sekolah">
            <p class="text-sm">
                Jl. Siliwangi No 123, Cibadak, Sukabumi, Jawa Barat 43351, Indonesia
            </p>
            <p class="mt-2 text-sm">Telp: (0266)123456</p>
            <p class="text-sm">Email: info@smpncibadak.sch.id</p>
        </div>

        <!-- Navigasi -->
        <div>
            <h3 class="font-semibold mb-3">Jelajah</h3>
            <ul class="space-y-2 text-sm">
                <li><a href="{{ route('home') }}" class="hover:text-white">Beranda</a></li>
                <li><a href="{{ route('about') }}" class="hover:text-white">Tentang Kami</a></li>
                <li><a href="{{ route('activities') }}" class="hover:text-white">Kegiatan</a></li>
                <li><a href="{{ route('news') }}" class="hover:text-white">Berita</a></li>
                <li><a href="{{ route('contact') }}" class="hover:text-white">Kontak</a></li>
            </ul>
        </div>

        <!-- Media Sosial -->
        <div>
            <h3 class="font-semibold mb-3">Media Sosial</h3>
            <div class="flex space-x-4">
                <a href="#"><i class="fab fa-facebook text-xl"></i></a>
                <a href="#"><i class="fab fa-twitter text-xl"></i></a>
                <a href="#"><i class="fab fa-instagram text-xl"></i></a>
            </div>
        </div>
    </div>

    <div class="text-center py-4 border-t border-gray-700 text-sm">
        © {{ date('Y') }} SMP Negeri 1 Cibadak. All rights reserved.
    </div>
</footer>