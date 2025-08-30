<nav class="bg-white shadow-md fixed top-0 w-full z-50">
    <div class="container mx-auto flex justify-between items-center px-6 py-4">
        <div class="flex items-center">
            <img src="{{ asset('logo.png') }}" alt="Logo" class="h-10 mr-3">
            <span class="font-bold text-lg">SMPN 1 Cibadak</span>
        </div>
        <ul class="hidden md:flex space-x-6 font-medium">
            <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-blue-600' : 'hover:text-blue-600' }}">Beranda</a></li>
            <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'text-blue-600' : 'hover:text-blue-600' }}">Tentang Kami</a></li>
            <li><a href="{{ route('activities') }}" class="{{ request()->routeIs('activities') ? 'text-blue-600' : 'hover:text-blue-600' }}">Kegiatan</a></li>
            <li><a href="{{ route('news') }}" class="{{ request()->routeIs('news') ? 'text-blue-600' : 'hover:text-blue-600' }}">Berita</a></li>
            <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'text-blue-600' : 'hover:text-blue-600' }}">Kontak</a></li>
        </ul>
        <button class="md:hidden text-gray-700 focus:outline-none">
            <!-- Icon menu mobile -->
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>
    </div>
</nav>