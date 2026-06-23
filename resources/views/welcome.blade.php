<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang di Teman Naker</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body
    class="bg-cover bg-center bg-no-repeat text-slate-800 antialiased min-h-screen flex flex-col justify-between relative"
    style="background-image: linear-gradient(to bottom, rgba(15, 23, 42, 0.8), rgba(30, 41, 59, 0.9)), url('{{ asset('images/auth/background-auth.webp') }}');">

    <header class="relative z-10 w-full max-w-7xl mx-auto px-6 py-6 flex justify-between items-center">
        <div class="text-2xl font-black text-white tracking-tight">
            Teman <span class="text-blue-400">Naker</span>
        </div>

        <div class="flex items-center gap-5 sm:gap-6">
            <a href="/admin"
                class="bg-white/10 hover:bg-white/20 text-white backdrop-blur-sm border border-white/20 font-semibold py-2.5 px-5 rounded-xl transition duration-200 text-sm hidden sm:inline-flex items-center gap-2 group">
                <svg class="w-4 h-4 text-slate-400 group-hover:text-blue-400 transition duration-200" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1">
                    </path>
                </svg>
                <span>Login Admin</span>
            </a>

            <a href="{{ route('pendaftaran') }}"
                class="bg-white/10 hover:bg-white/20 text-white backdrop-blur-sm border border-white/20 font-semibold py-2.5 px-5 rounded-xl transition duration-200 text-sm hidden sm:inline-flex items-center justify-center">
                Buka Formulir
            </a>
        </div>
    </header>

    <main class="relative z-10 my-auto max-w-5xl mx-auto px-4 text-center py-12">
        <div
            class="inline-flex items-center gap-2 bg-blue-500/10 border border-blue-400/20 rounded-full px-4 py-1.5 mb-6 backdrop-blur-md">
            <span class="flex h-2 w-2 relative">
                <span
                    class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-500"></span>
            </span>
            <span class="text-xs font-semibold text-blue-300 uppercase tracking-wider">Layanan Online Disnaker
                2026</span>
        </div>

        <h1
            class="text-4xl sm:text-6xl font-black text-white tracking-tight max-w-4xl mx-auto leading-tight drop-shadow-md">
            Langkah Awal Menuju <br class="hidden sm:inline">
            <span class="bg-gradient-to-r from-blue-400 via-indigo-300 to-cyan-400 bg-clip-text text-transparent">Karier
                Impian Anda</span>
        </h1>

        <p class="mt-6 text-lg sm:text-xl text-slate-300 max-w-2xl mx-auto font-light leading-relaxed">
            Daftarkan diri Anda secara online di platform <strong class="text-white font-semibold">Teman Naker</strong>.
            Kami siap menjembatani potensi Anda dengan peluang kerja yang lebih luas.
        </p>

        <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center items-center">
            <a href="{{ route('pendaftaran') }}"
                class="group w-full sm:w-auto bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-bold py-4 px-8 rounded-2xl transition duration-200 shadow-2xl shadow-blue-600/30 hover:shadow-blue-600/40 transform active:scale-[0.99] flex items-center justify-center gap-3 text-lg">
                Mulai Pendaftaran Sekarang
                <svg class="w-5 h-5 group-hover:translate-x-1 transition duration-200" fill="none" stroke="currentColor"
                    viewbox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                        d="M13 5l7 7-7 7M5 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-20 max-w-4xl mx-auto">
            <div
                class="bg-white/5 backdrop-blur-md border border-white/10 rounded-2xl p-6 text-left hover:bg-white/10 transition duration-300">
                <div
                    class="w-12 h-12 bg-blue-500/10 rounded-xl flex items-center justify-center text-blue-400 mb-4 border border-blue-500/20">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                        </path>
                    </svg>
                </div>
                <h3 class="text-base font-bold text-white mb-2">Data Aman & Valid</h3>
                <p class="text-sm text-slate-400 leading-relaxed">Verifikasi data pencari kerja terintegrasi untuk
                    keamanan profil karier Anda.</p>
            </div>

            <div
                class="bg-white/5 backdrop-blur-md border border-white/10 rounded-2xl p-6 text-left hover:bg-white/10 transition duration-300">
                <div
                    class="w-12 h-12 bg-indigo-500/10 rounded-xl flex items-center justify-center text-indigo-400 mb-4 border border-indigo-500/20">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-base font-bold text-white mb-2">Proses Cepat</h3>
                <p class="text-sm text-slate-400 leading-relaxed">Pengisian formulir ringkas, terstruktur, dan dapat
                    diakses kapan saja dari HP Anda.</p>
            </div>

            <div
                class="bg-white/5 backdrop-blur-md border border-white/10 rounded-2xl p-6 text-left hover:bg-white/10 transition duration-300">
                <div
                    class="w-12 h-12 bg-cyan-500/10 rounded-xl flex items-center justify-center text-cyan-400 mb-4 border border-cyan-500/20">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                        </path>
                    </svg>
                </div>
                <h3 class="text-base font-bold text-white mb-2">Peluang Kerja Luas</h3>
                <p class="text-sm text-slate-400 leading-relaxed">Memudahkan Disnaker dalam menyalurkan kompetensi Anda
                    ke perusahaan mitra.</p>
            </div>
        </div>
    </main>

    <footer class="relative z-10 w-full text-center py-6 border-t border-white/5 bg-slate-950/20 backdrop-blur-sm">
        <p class="text-xs text-slate-500">
            &copy; 2026 Teman Naker - Dinas Tenaga Kerja. Hak Cipta Dilindungi.
        </p>
    </footer>

</body>

</html>
