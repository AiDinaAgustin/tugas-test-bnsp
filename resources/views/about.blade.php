@extends('layouts.app')

@section('content')

    {{-- Hero Section --}}
    <section class="relative bg-cover bg-center h-[300px] flex items-center justify-center text-white"
        style="background-image: url('{{ asset('sekolah.png') }}')">
        <div class="bg-black bg-opacity-50 p-6 rounded-lg text-center">
            <h1 class="text-3xl md:text-4xl font-bold">Tentang SMP Negeri 1 Cibadak</h1>
            <p class="mt-2 text-sm md:text-base">Sejarah, Profil, Visi dan Misi</p>
        </div>
    </section>

    {{-- Sejarah Sekolah --}}
    <section class="container mx-auto px-6 py-12">
        <h2 class="text-2xl font-bold mb-4 text-center">Sejarah SMP Negeri 1 Cibadak Kab. Sukabumi</h2>
        <p class="text-gray-700 leading-relaxed text-justify">
            SMP Negeri 1 Cibadak didirikan pada tahun 1965 berdasarkan Surat Keputusan Menteri P & K Republik Indonesia.
            Pada mulanya, sekolah didirikan di daerah kebon pala yang sekarang menjadi Pasar & Terminal Cibadak.
            Berangkat dari antusias dan kepedulian masyarakat terhadap dunia pendidikan, maka sekolah ini resmi berdiri
            dengan nama SMP Cibadak. <br><br>
            SMP Negeri 1 Cibadak sebagai bagian dari dunia pendidikan yang berada di Kecamatan Cibadak mempunyai peranan
            yang sangat penting dalam meningkatkan sumber daya manusia Indonesia seutuhnya pada anak usia sekolah
            khususnya pada jenjang Sekolah Menengah Pertama, yang berada di Kabupaten Sukabumi. <br><br>
            ...
        </p>
    </section>

    {{-- Profil Sekolah --}}
    <section class="bg-gray-50 py-12">
        <div class="container mx-auto px-6">
            <h2 class="text-2xl font-bold mb-6 text-center">Profil SMP Negeri 1 Cibadak</h2>

            {{-- Card Info --}}
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-white shadow rounded-lg p-6">
                    <h3 class="font-semibold text-lg mb-2">Nama Sekolah</h3>
                    <p>SMP Negeri 1 Cibadak</p>
                </div>
                <div class="bg-white shadow rounded-lg p-6">
                    <h3 class="font-semibold text-lg mb-2">No. Pendirian Sekolah</h3>
                    <p>421 / 997 / 2005</p>
                </div>
                <div class="bg-white shadow rounded-lg p-6">
                    <h3 class="font-semibold text-lg mb-2">NIS / Statistik</h3>
                    <p>200093</p>
                </div>
                <div class="bg-white shadow rounded-lg p-6">
                    <h3 class="font-semibold text-lg mb-2">Alamat</h3>
                    <p>Jl. Siliwangi No. 123, Cibadak, Sukabumi</p>
                </div>
                <div class="bg-white shadow rounded-lg p-6">
                    <h3 class="font-semibold text-lg mb-2">Jenjang Akreditasi</h3>
                    <p>A</p>
                </div>
                <div class="bg-white shadow rounded-lg p-6">
                    <h3 class="font-semibold text-lg mb-2">Tahun Berdiri</h3>
                    <p>1965</p>
                </div>
            </div>

            {{-- Data Siswa --}}
            <div class="mt-12">
                <h3 class="text-xl font-semibold mb-4">Jumlah Siswa</h3>
                <div class="overflow-x-auto">
                    <table class="w-full border border-gray-200">
                        <thead class="bg-blue-600 text-white">
                            <tr>
                                <th class="p-2">Kelas</th>
                                <th class="p-2">Laki-laki</th>
                                <th class="p-2">Perempuan</th>
                                <th class="p-2">Jumlah</th>
                                <th class="p-2">Jumlah Rombel</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center border-b">
                                <td class="p-2">VII</td>
                                <td class="p-2">140</td>
                                <td class="p-2">196</td>
                                <td class="p-2">336</td>
                                <td class="p-2">8</td>
                            </tr>
                            <tr class="text-center border-b bg-gray-50">
                                <td class="p-2">VIII</td>
                                <td class="p-2">140</td>
                                <td class="p-2">196</td>
                                <td class="p-2">336</td>
                                <td class="p-2">8</td>
                            </tr>
                            <tr class="text-center border-b">
                                <td class="p-2">IX</td>
                                <td class="p-2">140</td>
                                <td class="p-2">196</td>
                                <td class="p-2">336</td>
                                <td class="p-2">8</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </section>

    {{-- Visi Misi --}}
    <section class="container mx-auto px-6 py-12">
        <h2 class="text-2xl font-bold mb-8 text-center">Visi dan Misi SMP Negeri 1 Cibadak</h2>

        <div class="grid md:grid-cols-2 gap-6">
            <div class="bg-white shadow rounded-lg p-6">
                <h3 class="text-lg font-semibold mb-2">Visi</h3>
                <p class="text-gray-700">
                    Membentuk pembelajar yang akhlakul karimah, berilmu, beretika, berwawasan lingkungan untuk menuju pentas dunia.
                </p>
            </div>
            <div class="bg-white shadow rounded-lg p-6">
                <h3 class="text-lg font-semibold mb-2">Misi</h3>
                <ul class="list-disc pl-5 text-gray-700 space-y-1">
                    <li>Mewujudkan pendidikan dengan keteladanan</li>
                    <li>Mengembangkan budaya belajar dengan kecintaan terhadap ilmu</li>
                    <li>Meningkatkan fasilitas menuju sekolah bersih, sehat, dan berwawasan lingkungan</li>
                </ul>
            </div>
        </div>

        {{-- Tujuan & Strategi --}}
        <div class="mt-12 space-y-6">
            <div class="bg-blue-50 p-6 rounded-lg">
                <h3 class="font-semibold text-lg mb-2">Tujuan Sekolah</h3>
                <ul class="list-disc pl-5 space-y-1 text-gray-700">
                    <li>100% Guru/Staf memberi pelayanan dan keteladanan</li>
                    <li>100% Siswa melaksanakan syariat agama, etika, budaya</li>
                    <li>90% Fasilitas sesuai Standar Nasional Pendidikan (SNP)</li>
                    <li>80% Siswa berprestasi hingga nasional / global</li>
                </ul>
            </div>

            <div class="bg-blue-600 text-white p-6 rounded-lg text-center">
                <h3 class="text-lg font-semibold mb-2">Strategi</h3>
                <p>
                    Tiada kekayaan yang paling utama daripada kekayaan jiwa, tiada kepapaan yang paling menyedihkan daripada kebodohan, dan tiada warisan paling baik daripada pendidikan.
                </p>
            </div>
        </div>
    </section>

@endsection
