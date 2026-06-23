<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Teman Naker - Mulai Karier Anda</title>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body { font-family: 'Outfit', sans-serif; }
        .glass-panel {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
            100% { transform: translateY(0px); }
        }
        /* Custom Scrollbar */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #020617; } /* slate-950 */
        ::-webkit-scrollbar-thumb { background: #3b82f6; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #60a5fa; }
    </style>
</head>
<body class="bg-slate-950 text-slate-100 min-h-screen overflow-x-hidden selection:bg-blue-500 selection:text-white relative">

    <!-- Decorative Ambient Background Elements -->
    <div class="fixed inset-0 z-0 overflow-hidden pointer-events-none">
        <div class="absolute -top-[20%] -left-[10%] w-[60%] h-[60%] rounded-full bg-blue-600/10 blur-[120px]"></div>
        <div class="absolute top-[60%] -right-[10%] w-[50%] h-[50%] rounded-full bg-purple-600/10 blur-[150px]"></div>
        <div class="absolute top-[30%] left-[20%] w-[30%] h-[30%] rounded-full bg-cyan-500/5 blur-[100px] animate-float"></div>
    </div>

    <div class="relative z-10 min-h-screen flex flex-col md:flex-row">
        
        <!-- Left Side: Branding & Info -->
        <div class="w-full md:w-5/12 lg:w-1/3 p-8 md:p-12 flex flex-col justify-between border-b md:border-b-0 md:border-r border-white/5 glass-panel">
            <div>
                <a href="{{ route('welcome') }}" class="inline-flex items-center gap-2 text-slate-400 hover:text-white transition-colors duration-300 group">
                    <div class="p-2 rounded-full bg-white/5 group-hover:bg-white/10 transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                    </div>
                    <span class="font-medium text-sm">Kembali Beranda</span>
                </a>
                
                <div class="mt-16 md:mt-24">
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-blue-500/10 border border-blue-500/20 text-blue-400 text-xs font-bold uppercase tracking-wider mb-6">
                        <span class="relative flex h-2 w-2">
                          <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                          <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-500"></span>
                        </span>
                        Portal Rekrutmen
                    </div>
                    <h1 class="text-4xl md:text-5xl font-extrabold tracking-tight mb-6 leading-tight">
                        Bergabunglah dengan <br/>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-indigo-400 to-purple-400">Teman Naker</span>
                    </h1>
                    <p class="text-slate-400 text-lg leading-relaxed mb-8">
                        Langkah pertama menuju karier impian Anda dimulai di sini. Lengkapi profil Anda dan temukan peluang yang tak terbatas.
                    </p>
                    
                    <div class="space-y-6 mt-12 hidden md:block">
                        <div class="flex items-start gap-4 p-4 rounded-2xl bg-white/5 border border-white/5 hover:bg-white/10 transition duration-300">
                            <div class="w-10 h-10 rounded-full bg-blue-500/20 flex items-center justify-center shrink-0 border border-blue-500/30">
                                <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-white mb-1">Data Terenkripsi & Aman</h4>
                                <p class="text-sm text-slate-400 leading-relaxed">Informasi pribadi Anda dijaga kerahasiaannya dengan standar keamanan terenkripsi.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 p-4 rounded-2xl bg-white/5 border border-white/5 hover:bg-white/10 transition duration-300">
                            <div class="w-10 h-10 rounded-full bg-purple-500/20 flex items-center justify-center shrink-0 border border-purple-500/30">
                                <svg class="w-5 h-5 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-white mb-1">Peluang Emas Terbuka</h4>
                                <p class="text-sm text-slate-400 leading-relaxed">Akses prioritas langsung ke ribuan lowongan dari perusahaan terverifikasi.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mt-12 text-sm text-slate-500 hidden md:block font-medium">
                &copy; {{ date('Y') }} Teman Naker. All rights reserved.
            </div>
        </div>

        <!-- Right Side: Form Content -->
        <div class="w-full md:w-7/12 lg:w-2/3 p-6 md:p-12 lg:p-16 xl:p-24 overflow-y-auto">
            <div class="max-w-3xl mx-auto">
                
                @if(session('success'))
                <div class="mb-10 p-5 rounded-2xl bg-emerald-500/10 border border-emerald-500/20 flex items-start gap-4 backdrop-blur-md animate-float" style="animation-duration: 4s;">
                    <div class="bg-emerald-500 shadow-[0_0_15px_rgba(16,185,129,0.5)] rounded-full p-1.5 shrink-0 text-white mt-0.5">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                    </div>
                    <div>
                        <h3 class="text-emerald-400 font-bold mb-1 text-lg">Pendaftaran Berhasil!</h3>
                        <p class="text-emerald-300/80 text-sm font-medium">{{ session('success') }}</p>
                    </div>
                </div>
                @endif

                <form action="{{ route('pendaftaran.store') }}" method="POST" enctype="multipart/form-data" class="space-y-14">
                    @csrf
                    
                    <!-- Section 1 -->
                    <div class="relative pl-6 md:pl-10">
                        <div class="absolute left-0 top-1 bottom-1 w-[2px] bg-gradient-to-b from-blue-500 via-blue-500/50 to-transparent rounded-full"></div>
                        <h2 class="text-2xl font-bold text-white mb-8 flex items-center gap-3">
                            <span class="absolute -left-[5px] w-3 h-3 rounded-full bg-blue-500 shadow-[0_0_12px_rgba(59,130,246,0.9)] ring-4 ring-slate-950"></span>
                            Identitas Pribadi
                        </h2>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-7">
                            <div class="col-span-1 md:col-span-2 group">
                                <label class="block text-sm font-semibold text-slate-400 mb-2 group-focus-within:text-blue-400 transition-colors">NIK (Nomor Induk Kependudukan) <span class="text-rose-500">*</span></label>
                                <input type="text" name="nik" value="{{ old('nik') }}" class="w-full bg-slate-900/40 border @error('nik') border-rose-500/50 focus:border-rose-500 @else border-slate-700/50 focus:border-blue-500 @enderror rounded-xl px-5 py-3.5 text-white placeholder-slate-600 focus:ring-1 focus:ring-blue-500 focus:bg-slate-900/80 transition-all duration-300 outline-none" placeholder="Masukkan 16 digit angka KTP">
                                @error('nik') <p class="mt-2 text-sm text-rose-400 flex items-center gap-1"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> {{ $message }}</p> @enderror
                            </div>
                            
                            <div class="col-span-1 md:col-span-2 group">
                                <label class="block text-sm font-semibold text-slate-400 mb-2 group-focus-within:text-blue-400 transition-colors">Nama Lengkap <span class="text-rose-500">*</span></label>
                                <input type="text" name="nama" value="{{ old('nama') }}" class="w-full bg-slate-900/40 border @error('nama') border-rose-500/50 focus:border-rose-500 @else border-slate-700/50 focus:border-blue-500 @enderror rounded-xl px-5 py-3.5 text-white placeholder-slate-600 focus:ring-1 focus:ring-blue-500 focus:bg-slate-900/80 transition-all duration-300 outline-none" placeholder="Sesuai dengan nama di KTP Anda">
                                @error('nama') <p class="mt-2 text-sm text-rose-400 flex items-center gap-1"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> {{ $message }}</p> @enderror
                            </div>

                            <div class="group">
                                <label class="block text-sm font-semibold text-slate-400 mb-2 group-focus-within:text-blue-400 transition-colors">Tempat Lahir <span class="text-rose-500">*</span></label>
                                <input type="text" name="tempat_lahir" value="{{ old('tempat_lahir') }}" class="w-full bg-slate-900/40 border @error('tempat_lahir') border-rose-500/50 focus:border-rose-500 @else border-slate-700/50 focus:border-blue-500 @enderror rounded-xl px-5 py-3.5 text-white placeholder-slate-600 focus:ring-1 focus:ring-blue-500 focus:bg-slate-900/80 transition-all duration-300 outline-none" placeholder="Kota / Kabupaten">
                                @error('tempat_lahir') <p class="mt-2 text-sm text-rose-400 flex items-center gap-1"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> {{ $message }}</p> @enderror
                            </div>

                            <div class="group">
                                <label class="block text-sm font-semibold text-slate-400 mb-2 group-focus-within:text-blue-400 transition-colors">Tanggal Lahir <span class="text-rose-500">*</span></label>
                                <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" class="w-full bg-slate-900/40 border @error('tanggal_lahir') border-rose-500/50 focus:border-rose-500 @else border-slate-700/50 focus:border-blue-500 @enderror rounded-xl px-5 py-3.5 text-white placeholder-slate-600 focus:ring-1 focus:ring-blue-500 focus:bg-slate-900/80 transition-all duration-300 outline-none [color-scheme:dark]">
                                @error('tanggal_lahir') <p class="mt-2 text-sm text-rose-400 flex items-center gap-1"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> {{ $message }}</p> @enderror
                            </div>

                            <div class="col-span-1 md:col-span-2">
                                <label class="block text-sm font-semibold text-slate-400 mb-3">Jenis Kelamin <span class="text-rose-500">*</span></label>
                                <div class="flex gap-4">
                                    <label class="flex-1 cursor-pointer">
                                        <input type="radio" name="jenis_kelamin" value="L" class="peer sr-only" {{ old('jenis_kelamin') == 'L' ? 'checked' : '' }}>
                                        <div class="rounded-xl border @error('jenis_kelamin') border-rose-500/50 @else border-slate-700/50 @enderror bg-slate-900/40 px-5 py-4 hover:border-blue-500 peer-checked:border-blue-500 peer-checked:bg-blue-500/10 peer-checked:text-blue-400 transition-all duration-300 text-center text-slate-300 font-medium flex items-center justify-center gap-2">
                                            Laki-laki
                                        </div>
                                    </label>
                                    <label class="flex-1 cursor-pointer">
                                        <input type="radio" name="jenis_kelamin" value="P" class="peer sr-only" {{ old('jenis_kelamin') == 'P' ? 'checked' : '' }}>
                                        <div class="rounded-xl border @error('jenis_kelamin') border-rose-500/50 @else border-slate-700/50 @enderror bg-slate-900/40 px-5 py-4 hover:border-purple-500 peer-checked:border-purple-500 peer-checked:bg-purple-500/10 peer-checked:text-purple-400 transition-all duration-300 text-center text-slate-300 font-medium flex items-center justify-center gap-2">
                                            Perempuan
                                        </div>
                                    </label>
                                </div>
                                @error('jenis_kelamin') <p class="mt-2 text-sm text-rose-400 flex items-center gap-1"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> {{ $message }}</p> @enderror
                            </div>
                        </div>
                    </div>

                    <!-- Section 2 -->
                    <div class="relative pl-6 md:pl-10">
                        <div class="absolute left-0 top-1 bottom-1 w-[2px] bg-gradient-to-b from-blue-500/50 via-purple-500/80 to-transparent rounded-full"></div>
                        <h2 class="text-2xl font-bold text-white mb-8 flex items-center gap-3">
                            <span class="absolute -left-[5px] w-3 h-3 rounded-full bg-purple-500 shadow-[0_0_12px_rgba(168,85,247,0.9)] ring-4 ring-slate-950"></span>
                            Kontak & Pendidikan
                        </h2>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-7">
                            <div class="col-span-1 md:col-span-2 group">
                                <label class="block text-sm font-semibold text-slate-400 mb-2 group-focus-within:text-purple-400 transition-colors">Alamat Lengkap Domisili <span class="text-rose-500">*</span></label>
                                <textarea name="alamat" rows="3" class="w-full bg-slate-900/40 border @error('alamat') border-rose-500/50 focus:border-rose-500 @else border-slate-700/50 focus:border-purple-500 @enderror rounded-xl px-5 py-3.5 text-white placeholder-slate-600 focus:ring-1 focus:ring-purple-500 focus:bg-slate-900/80 transition-all duration-300 outline-none resize-none" placeholder="Sertakan nama jalan, RT/RW, desa/kelurahan, dan kecamatan">{{ old('alamat') }}</textarea>
                                @error('alamat') <p class="mt-2 text-sm text-rose-400 flex items-center gap-1"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> {{ $message }}</p> @enderror
                            </div>

                            <div class="group">
                                <label class="block text-sm font-semibold text-slate-400 mb-2 group-focus-within:text-purple-400 transition-colors">Nomor Handphone / WhatsApp <span class="text-rose-500">*</span></label>
                                <input type="tel" name="no_hp" value="{{ old('no_hp') }}" class="w-full bg-slate-900/40 border @error('no_hp') border-rose-500/50 focus:border-rose-500 @else border-slate-700/50 focus:border-purple-500 @enderror rounded-xl px-5 py-3.5 text-white placeholder-slate-600 focus:ring-1 focus:ring-purple-500 focus:bg-slate-900/80 transition-all duration-300 outline-none" placeholder="Contoh: 081234567890">
                                @error('no_hp') <p class="mt-2 text-sm text-rose-400 flex items-center gap-1"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> {{ $message }}</p> @enderror
                            </div>

                            <div class="group">
                                <label class="block text-sm font-semibold text-slate-400 mb-2 group-focus-within:text-purple-400 transition-colors">Alamat Email Aktif <span class="text-rose-500">*</span></label>
                                <input type="email" name="email" value="{{ old('email') }}" class="w-full bg-slate-900/40 border @error('email') border-rose-500/50 focus:border-rose-500 @else border-slate-700/50 focus:border-purple-500 @enderror rounded-xl px-5 py-3.5 text-white placeholder-slate-600 focus:ring-1 focus:ring-purple-500 focus:bg-slate-900/80 transition-all duration-300 outline-none" placeholder="anda@email.com">
                                @error('email') <p class="mt-2 text-sm text-rose-400 flex items-center gap-1"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> {{ $message }}</p> @enderror
                            </div>

                            <div class="group">
                                <label class="block text-sm font-semibold text-slate-400 mb-2 group-focus-within:text-purple-400 transition-colors">Pendidikan Terakhir <span class="text-rose-500">*</span></label>
                                <div class="relative">
                                    <select name="pendidikan_id" class="w-full appearance-none bg-slate-900/40 border @error('pendidikan_id') border-rose-500/50 focus:border-rose-500 @else border-slate-700/50 focus:border-purple-500 @enderror rounded-xl px-5 py-3.5 text-white placeholder-slate-600 focus:ring-1 focus:ring-purple-500 focus:bg-slate-900/80 transition-all duration-300 outline-none cursor-pointer">
                                        <option value="" class="bg-slate-900 text-slate-400">Pilih Tingkat Pendidikan</option>
                                        @foreach($listPendidikan as $pendidikan)
                                            <option value="{{ $pendidikan->id }}" class="bg-slate-900 text-white" {{ old('pendidikan_id') == $pendidikan->id ? 'selected' : '' }}>{{ $pendidikan->nama_pendidikan }}</option>
                                        @endforeach
                                    </select>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-slate-400">
                                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                    </div>
                                </div>
                                @error('pendidikan_id') <p class="mt-2 text-sm text-rose-400 flex items-center gap-1"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> {{ $message }}</p> @enderror
                            </div>

                            <div class="group">
                                <label class="block text-sm font-semibold text-slate-400 mb-2 group-focus-within:text-purple-400 transition-colors">Status Kerja Saat Ini <span class="text-rose-500">*</span></label>
                                <div class="relative">
                                    <select name="status_kerja" class="w-full appearance-none bg-slate-900/40 border @error('status_kerja') border-rose-500/50 focus:border-rose-500 @else border-slate-700/50 focus:border-purple-500 @enderror rounded-xl px-5 py-3.5 text-white placeholder-slate-600 focus:ring-1 focus:ring-purple-500 focus:bg-slate-900/80 transition-all duration-300 outline-none cursor-pointer">
                                        <option value="" class="bg-slate-900 text-slate-400">Pilih Status Saat Ini</option>
                                        <option value="belum_bekerja" class="bg-slate-900 text-white" {{ old('status_kerja') == 'belum_bekerja' ? 'selected' : '' }}>Belum Bekerja</option>
                                        <option value="bekerja" class="bg-slate-900 text-white" {{ old('status_kerja') == 'bekerja' ? 'selected' : '' }}>Sedang Bekerja</option>
                                        <option value="freelance" class="bg-slate-900 text-white" {{ old('status_kerja') == 'freelance' ? 'selected' : '' }}>Freelance / Pekerja Lepas</option>
                                    </select>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-slate-400">
                                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                    </div>
                                </div>
                                @error('status_kerja') <p class="mt-2 text-sm text-rose-400 flex items-center gap-1"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> {{ $message }}</p> @enderror
                            </div>
                        </div>
                    </div>

                    <!-- Section 3 -->
                    <div class="relative pl-6 md:pl-10">
                        <div class="absolute left-0 top-1 bottom-full w-[2px] bg-gradient-to-b from-purple-500/50 to-transparent rounded-full"></div>
                        <h2 class="text-2xl font-bold text-white mb-8 flex items-center gap-3">
                            <span class="absolute -left-[5px] w-3 h-3 rounded-full bg-cyan-500 shadow-[0_0_12px_rgba(6,182,212,0.9)] ring-4 ring-slate-950"></span>
                            Dokumen Pendukung
                        </h2>
                        
                        <div>
                            <label class="block text-sm font-semibold text-slate-400 mb-3">Pas Foto Resmi Terbaru <span class="text-rose-500">*</span></label>
                            
                            <label class="relative flex flex-col items-center justify-center w-full h-56 border-2 border-dashed @error('pas_photo') border-rose-500/50 bg-rose-500/5 @else border-slate-700/70 hover:border-cyan-500 hover:bg-cyan-500/5 @enderror rounded-2xl cursor-pointer transition-all duration-300 group overflow-hidden bg-slate-900/30">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6 px-4 z-10 text-center" id="upload-prompt">
                                    <div class="p-4 bg-slate-800/80 rounded-full mb-4 group-hover:scale-110 group-hover:bg-cyan-500/20 transition-all duration-300 shadow-lg border border-white/5">
                                        <svg class="w-8 h-8 text-slate-400 group-hover:text-cyan-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path></svg>
                                    </div>
                                    <p class="text-base font-semibold text-slate-300 group-hover:text-cyan-300 transition-colors mb-1">Klik atau seret foto ke sini</p>
                                    <p class="text-xs text-slate-500">Maks. 2MB (Hanya format JPG, JPEG, PNG)</p>
                                </div>
                                <input type="file" name="pas_photo" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-20" id="photo-upload" accept="image/jpeg,image/png,image/jpg">
                                
                                <!-- Preview Image Element -->
                                <div id="preview-container" class="absolute inset-0 z-10 hidden bg-slate-900/90 backdrop-blur-sm flex items-center justify-center p-2">
                                    <img id="image-preview" class="max-h-full max-w-full rounded-lg object-contain shadow-2xl border border-white/10" src="#" alt="Preview">
                                    <div class="absolute top-3 right-3 bg-slate-900/80 text-white text-xs px-3 py-1 rounded-full border border-white/10 shadow-lg pointer-events-none">
                                        Klik untuk ganti
                                    </div>
                                </div>
                            </label>
                            @error('pas_photo') <p class="mt-2 text-sm text-rose-400 flex items-center gap-1"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> {{ $message }}</p> @enderror
                        </div>
                    </div>

                    <div class="pt-10">
                        <button type="submit" class="group relative w-full flex justify-center py-4 px-6 border border-transparent text-lg font-bold rounded-2xl text-white bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 hover:from-blue-500 hover:via-indigo-500 hover:to-purple-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-slate-900 focus:ring-indigo-500 shadow-[0_0_20px_rgba(99,102,241,0.4)] hover:shadow-[0_0_30px_rgba(99,102,241,0.6)] transform transition-all duration-300 hover:-translate-y-1 overflow-hidden">
                            <span class="absolute inset-0 w-full h-full bg-gradient-to-r from-transparent via-white/20 to-transparent -translate-x-full group-hover:animate-[shimmer_1.5s_infinite]"></span>
                            <span class="flex items-center gap-2">
                                Kirim Formulir Pendaftaran
                                <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path></svg>
                            </span>
                        </button>
                        <p class="text-center text-slate-500 text-sm mt-4">Dengan menekan tombol kirim, Anda menyetujui syarat & ketentuan kami.</p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Interactive Image Preview Script
        document.getElementById('photo-upload').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('image-preview').src = e.target.result;
                    document.getElementById('preview-container').classList.remove('hidden');
                    document.getElementById('upload-prompt').classList.add('opacity-0');
                }
                reader.readAsDataURL(file);
            } else {
                document.getElementById('preview-container').classList.add('hidden');
                document.getElementById('upload-prompt').classList.remove('opacity-0');
            }
        });

        // Add subtle animation to form inputs on load
        document.addEventListener('DOMContentLoaded', () => {
            const inputs = document.querySelectorAll('input, select, textarea');
            inputs.forEach((input, index) => {
                input.style.opacity = '0';
                input.style.transform = 'translateY(10px)';
                input.style.transition = 'all 0.4s ease-out';
                
                setTimeout(() => {
                    input.style.opacity = '1';
                    input.style.transform = 'translateY(0)';
                }, 100 * index + 300);
            });
        });
    </script>
    <style>
        @keyframes shimmer {
            100% { transform: translateX(100%); }
        }
    </style>
</body>
</html>