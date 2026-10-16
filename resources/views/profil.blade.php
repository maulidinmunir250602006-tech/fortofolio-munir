<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- SEO Google Meta Tags -->
    <title>Portofolio Maulidin Munir - Fullstack Laravel Developer</title>
    <meta name="description" content="Portofolio Resmi Maulidin Munir. Pengembang web profesional berbasis Laravel, PHP, dan Tailwind CSS.">
    <meta name="keywords" content="Portofolio Munir, Portofolio Maulidin Munir, Maulidin Munir, Laravel Developer, Fullstack Web Developer, Web Developer Indonesia">
    <meta name="author" content="Maulidin Munir">
    <meta name="robots" content="index, follow">

    <!-- Open Graph / Social Media -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Portofolio Maulidin Munir - Laravel Developer">
    <meta property="og:description" content="Sistem & Portofolio Interaktif oleh Maulidin Munir.">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap');
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .glass {
            background: rgba(15, 23, 42, 0.75);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }
    </style>
</head>
<body class="bg-slate-950 text-slate-100 min-h-screen antialiased selection:bg-red-500 selection:text-white relative overflow-x-hidden">

    <!-- Ambient Background Glows -->
    <div class="fixed top-0 left-1/4 w-96 h-96 bg-red-600/15 rounded-full blur-3xl pointer-events-none -z-10"></div>
    <div class="fixed bottom-0 right-1/4 w-[500px] h-[500px] bg-rose-900/10 rounded-full blur-3xl pointer-events-none -z-10"></div>

    <!-- Navigation Bar -->
    <nav class="fixed top-0 left-0 w-full glass z-50 px-6 py-4 border-b border-slate-800/60">
        <div class="max-w-6xl mx-auto flex justify-between items-center">
            <a href="#" class="flex items-center gap-2 font-black text-xl tracking-wider text-red-500 group">
                <div class="p-2 bg-red-500/10 rounded-xl border border-red-500/20 group-hover:scale-110 transition-transform">
                    <i class="fa-brands fa-laravel text-2xl"></i>
                </div>
                <span>MUNIR<span class="text-slate-400 font-light">DEV</span></span>
            </a>
            <div class="hidden md:flex items-center gap-8 text-sm font-medium text-slate-300">
                <a href="#tentang" class="hover:text-red-400 transition-colors">Tentang</a>
                <a href="#statistik" class="hover:text-red-400 transition-colors">Statistik</a>
                <a href="#keahlian" class="hover:text-red-400 transition-colors">Keahlian</a>
                <a href="#proyek" class="hover:text-red-400 transition-colors">Proyek</a>
                <a href="#kontak" class="hover:text-red-400 transition-colors">Kontak</a>
            </div>
            <a href="/" class="glass text-xs font-bold px-4 py-2.5 rounded-xl border border-slate-700/60 hover:border-red-500/50 hover:text-red-400 transition-all flex items-center gap-2">
                <i class="fa-solid fa-house text-red-500"></i> Home
            </a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="tentang" class="pt-36 pb-20 px-6 max-w-6xl mx-auto">
        <div class="flex flex-col md:flex-row items-center justify-between gap-12">
            <div class="flex-1 space-y-6">
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-red-500/10 border border-red-500/20 text-red-400 text-xs font-semibold">
                    <span class="w-2 h-2 rounded-full bg-red-500 animate-ping"></span>
                    Pengembang Laravel Siap Kerja
                </div>
                <h1 class="text-4xl md:text-6xl font-black tracking-tight leading-tight">
                    Bangun Web Modern & <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-500 via-rose-400 to-amber-400">
                        Sistem Berkinerja Tinggi
                    </span>
                </h1>
                <p class="text-slate-400 text-base md:text-lg leading-relaxed max-w-xl">
                    Halo! Saya <strong class="text-slate-100">{{ $nama }}</strong>, seorang <strong class="text-slate-100">{{ $peran }}</strong>. Saya merancang arsitektur aplikasi backend yang rapi, cepat, dan terukur.
                </p>

                <!-- Action Buttons & Socials -->
                <div class="flex flex-wrap items-center gap-4 pt-2">
                    <a href="#kontak" class="bg-gradient-to-r from-red-600 to-rose-600 hover:from-red-500 hover:to-rose-500 text-white font-bold px-7 py-3.5 rounded-2xl shadow-lg shadow-red-600/30 transition-all hover:scale-105 flex items-center gap-2">
                        <i class="fa-solid fa-paper-plane"></i> Minta Diskusi
                    </a>
                    <div class="flex items-center gap-2 pl-2 border-l border-slate-800">
                        <a href="https://github.com" target="_blank" class="w-11 h-11 glass rounded-xl flex items-center justify-center text-slate-400 hover:text-white hover:border-red-500/50 transition-all">
                            <i class="fa-brands fa-github text-lg"></i>
                        </a>
                        <a href="https://linkedin.com" target="_blank" class="w-11 h-11 glass rounded-xl flex items-center justify-center text-slate-400 hover:text-white hover:border-red-500/50 transition-all">
                            <i class="fa-brands fa-linkedin-in text-lg"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Profile Badge Card dengan Foto Profil -->
            <div class="relative group">
                <div class="absolute -inset-1 bg-gradient-to-r from-red-600 to-amber-500 rounded-3xl blur-xl opacity-30 group-hover:opacity-60 transition duration-500"></div>
                <div class="relative glass p-8 rounded-3xl w-full max-w-sm text-center border border-slate-800">
                    <div class="relative w-36 h-36 mx-auto mb-6">
                        <img src="{{ asset('images/foto-formal.jpg') }}" onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=500&auto=format&fit=crop&q=80';" alt="{{ $nama }}" class="w-full h-full object-cover rounded-2xl border-2 border-red-500/50 shadow-2xl">
                        <div class="absolute -bottom-2 -right-2 bg-slate-900 border border-slate-700 p-2 rounded-xl text-xs text-emerald-400 font-bold flex items-center gap-1.5 shadow-lg">
                            <i class="fa-solid fa-circle text-[8px] text-emerald-400"></i> Online
                        </div>
                    </div>
                    <h3 class="text-2xl font-bold text-white">{{ $nama }}</h3>
                    <p class="text-xs text-red-400 font-semibold tracking-wider uppercase mt-1">{{ $peran }}</p>

                    <div class="mt-6 pt-6 border-t border-slate-800/80 space-y-3 text-xs text-left">
                        <div class="flex justify-between items-center text-slate-400">
                            <span><i class="fa-solid fa-code text-red-500 mr-2"></i> Environment</span>
                            <span class="text-slate-200 font-medium px-2 py-0.5 rounded bg-slate-800 border border-slate-700">Ubuntu Linux</span>
                        </div>
                        <div class="flex justify-between items-center text-slate-400">
                            <span><i class="fa-solid fa-cubes text-red-500 mr-2"></i> Framework</span>
                            <span class="text-slate-200 font-medium px-2 py-0.5 rounded bg-slate-800 border border-slate-700">Laravel 11</span>
                        </div>
                        <div class="flex justify-between items-center text-slate-400">
                            <span><i class="fa-solid fa-database text-red-500 mr-2"></i> Database</span>
                            <span class="text-slate-200 font-medium px-2 py-0.5 rounded bg-slate-800 border border-slate-700">SQLite & MySQL</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Counter / Stats Section -->
    <section id="statistik" class="py-12 bg-slate-900/40 border-y border-slate-800/50 px-6">
        <div class="max-w-6xl mx-auto grid grid-cols-2 md:grid-cols-4 gap-6">
            @foreach($statistik as $stat)
            <div class="glass p-6 rounded-2xl text-center border border-slate-800/80 hover:border-red-500/30 transition-all">
                <div class="text-3xl md:text-4xl font-black text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-rose-400">
                    {{ $stat['angka'] }}
                </div>
                <div class="text-xs text-slate-400 font-medium mt-2 uppercase tracking-wider">{{ $stat['label'] }}</div>
            </div>
            @endforeach
        </div>
    </section>

    <!-- Skills Section -->
    <section id="keahlian" class="py-20 px-6 max-w-6xl mx-auto">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <h2 class="text-3xl font-black tracking-tight">Keahlian Utamanya</h2>
            <p class="text-slate-400 text-sm mt-2">Penguasaan teknologi dalam ekosistem pembuatan aplikasi web.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach($keahlian as $skill => $level)
            <div class="glass p-5 rounded-2xl border border-slate-800/80 hover:border-slate-700 transition-all">
                <div class="flex justify-between items-center mb-3">
                    <span class="font-bold text-slate-200 text-sm flex items-center gap-2">
                        <i class="fa-solid fa-check text-red-500 text-xs"></i> {{ $skill }}
                    </span>
                    <span class="text-xs font-bold text-red-400 bg-red-500/10 px-2.5 py-1 rounded-md border border-red-500/20">{{ $level }}%</span>
                </div>
                <div class="w-full bg-slate-800/80 h-2 rounded-full overflow-hidden p-0.5">
                    <div class="bg-gradient-to-r from-red-600 to-rose-400 h-full rounded-full transition-all duration-1000" style="width: {{ $level }}%"></div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <!-- Projects Section -->
    <section id="proyek" class="py-20 bg-slate-900/30 border-t border-slate-800/50 px-6">
        <div class="max-w-6xl mx-auto">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <h2 class="text-3xl font-black tracking-tight">Portofolio Proyek</h2>
                <p class="text-slate-400 text-sm mt-2">Kumpulan sistem yang pernah dirancang dan diimplementasikan oleh {{ $nama }}.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @foreach($proyek as $item)
                <div class="glass rounded-3xl p-7 border border-slate-800/80 hover:border-red-500/40 transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="flex justify-between items-start mb-5">
                            <div class="p-3 bg-red-500/10 text-red-500 rounded-2xl border border-red-500/20 group-hover:scale-110 transition-transform">
                                <i class="fa-solid fa-laptop-code text-xl"></i>
                            </div>
                            <span class="text-[11px] font-bold bg-slate-800 text-slate-300 border border-slate-700/80 px-3 py-1 rounded-full">{{ $item['tech'] }}</span>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2 group-hover:text-red-400 transition-colors">{{ $item['judul'] }}</h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-6">{{ $item['deskripsi'] }}</p>
                    </div>
                    <div class="pt-4 border-t border-slate-800/80 flex justify-between items-center text-xs">
                        <span class="text-slate-500 font-medium">Status: <strong class="text-emerald-400">Aktif & Selesai</strong></span>
                        <a href="#" class="text-red-400 hover:text-red-300 font-bold flex items-center gap-1 group/link">
                            Detail Sistem <i class="fa-solid fa-arrow-right text-[10px] group-hover/link:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section id="kontak" class="py-20 px-6 max-w-4xl mx-auto">
        <div class="glass border border-slate-800/80 rounded-3xl p-8 md:p-12 relative overflow-hidden">
            <div class="text-center max-w-lg mx-auto mb-10">
                <h2 class="text-3xl font-black">Kirim Pesan & Diskusi</h2>
                <p class="text-slate-400 text-sm mt-2">Isi formulir di bawah untuk memulai kolaborasi proyek web kamu.</p>
            </div>

            <form action="#" method="POST" class="space-y-5" onsubmit="event.preventDefault(); alert('Terima kasih! Pesan berhasil terkirim.');">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div>
                        <label class="block text-xs font-bold text-slate-400 mb-2 uppercase tracking-wider">Nama Anda</label>
                        <input type="text" placeholder="Masukkan nama" required class="w-full bg-slate-950/80 border border-slate-800 rounded-xl px-4 py-3.5 text-sm text-slate-200 focus:outline-none focus:border-red-500 transition-colors">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-400 mb-2 uppercase tracking-wider">Email Kontak</label>
                        <input type="email" placeholder="nama@email.com" required class="w-full bg-slate-950/80 border border-slate-800 rounded-xl px-4 py-3.5 text-sm text-slate-200 focus:outline-none focus:border-red-500 transition-colors">
                    </div>
                </div>
                <div>
                    <label class="block text-xs font-bold text-slate-400 mb-2 uppercase tracking-wider">Pesan Proyek</label>
                    <textarea rows="4" placeholder="Jelaskan kebutuhan proyek atau pertanyaan kamu..." required class="w-full bg-slate-950/80 border border-slate-800 rounded-xl px-4 py-3.5 text-sm text-slate-200 focus:outline-none focus:border-red-500 transition-colors"></textarea>
                </div>
                <button type="submit" class="w-full bg-gradient-to-r from-red-600 to-rose-600 hover:from-red-500 hover:to-rose-500 text-white font-bold py-4 rounded-xl shadow-lg shadow-red-600/30 transition-all hover:scale-[1.01]">
                    <i class="fa-solid fa-paper-plane mr-2"></i> Kirimkan Sekarang
                </button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-8 text-center text-xs text-slate-500 border-t border-slate-900 glass">
        <p>&copy; {{ date('Y') }} <strong>{{ $nama }}</strong>. Powered by <strong>Laravel {{ app()->version() }}</strong> & Tailwind CSS.</p>
    </footer>

</body>
</html>
