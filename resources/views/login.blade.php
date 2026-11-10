@extends('layouts.app')

@section('title', 'Masuk, Second Chapter')

@section('content')
    <div class="mx-auto max-w-sm">

        <h1 class="font-serif text-2xl font-bold">Masuk ke Second Chapter</h1>
        <p class="mt-1 text-muted">Setiap buku layak punya cerita berikutnya.</p>

        <form method="POST" action="{{ url('/login') }}" class="mt-6 border border-line bg-white p-6">
            @csrf

            <div>
                <label for="username" class="block text-sm font-medium">Nama pengguna</label>
                <input type="text" id="username" name="username" required
                       class="mt-1 w-full border border-line bg-paper px-3 py-2 text-ink focus:border-leather focus:outline-none">
            </div>

            <div class="mt-4">
                <label for="password" class="block text-sm font-medium">Kata sandi</label>
                <input type="password" id="password" name="password"
                       class="mt-1 w-full border border-line bg-paper px-3 py-2 text-ink focus:border-leather focus:outline-none">
            </div>

            <button type="submit"
                    class="mt-6 w-full bg-leather px-4 py-2 font-medium text-white hover:bg-ink focus:outline-none focus:ring-2 focus:ring-leather focus:ring-offset-2 focus:ring-offset-paper">
                Masuk
            </button>

            <p class="mt-3 text-xs text-muted">Simulasi: cukup isi nama pengguna.</p>
            <p class="mt-1 text-xs text-muted">Akun demo: admin, kata sandi bebas.</p>
        </form>

    </div>
@endsection
