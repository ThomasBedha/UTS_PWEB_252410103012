@extends('layouts.app')

@section('title', 'Profil, Second Chapter')

@section('content')
    <h1 class="font-serif text-2xl font-bold">Profil</h1>
    <p class="mt-1 text-muted">Akun yang sedang masuk.</p>

    <div class="mt-6 grid gap-4 md:grid-cols-2">
        <div class="border border-line bg-white px-5 py-5">
            <p class="text-sm text-muted">Nama pengguna</p>
            <p class="mt-1 font-serif text-xl font-bold text-leather">{{ $username }}</p>
        </div>

        <div class="border border-line bg-white px-5 py-5">
            <p class="text-sm text-muted">Peran</p>
            <p class="mt-1 font-serif text-xl font-bold text-leather">Admin Toko</p>
        </div>
    </div>

    <div class="mt-6 border border-line bg-white px-5 py-5">
        <h2 class="font-serif text-lg font-bold">Tentang Second Chapter</h2>
        <p class="mt-2 text-muted leading-relaxed">
            Second Chapter adalah toko buku bekas yang memilih sendiri setiap judul sebelum dipajang,
            supaya buku tetap layak dibaca untuk cerita berikutnya. Every Book Deserves Another Story.
        </p>
        <p class="mt-2 text-muted leading-relaxed">
            Berdiri sebagai simulasi pengelolaan stok untuk UTS Pemrograman Web, tanpa database.
        </p>
    </div>
@endsection
