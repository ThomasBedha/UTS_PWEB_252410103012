@extends('layouts.app')

@section('title', 'Dashboard, Second Chapter')

@section('content')
    <h1 class="font-serif text-2xl font-bold">Halo, {{ $username }}</h1>
    <p class="mt-1 text-muted">Ringkasan stok toko hari ini.</p>

    <div class="mt-6 grid gap-4 sm:grid-cols-3">
        @include('partials.kartu', ['label' => 'Total judul', 'nilai' => $totalJudul, 'keterangan' => 'judul berbeda di rak'])
        @include('partials.kartu', ['label' => 'Total stok', 'nilai' => $totalStok, 'keterangan' => 'buku siap dijual'])
        @include('partials.kartu', ['label' => 'Stok menipis', 'nilai' => $stokMenipis, 'keterangan' => 'judul tinggal 2 atau kurang'])
    </div>

    <p class="mt-8 text-muted">Detail tiap judul ada di halaman <a href="{{ url('/pengelolaan' . ($username ? '?username=' . urlencode($username) : '')) }}" class="text-leather underline decoration-line underline-offset-4 hover:decoration-ink">Pengelolaan</a>.</p>
@endsection
