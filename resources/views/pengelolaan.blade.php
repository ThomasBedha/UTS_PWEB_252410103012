@extends('layouts.app')

@section('title', 'Pengelolaan, Second Chapter')

@section('content')
    <h1 class="font-serif text-2xl font-bold">Daftar Buku</h1>
    <p class="mt-1 text-muted">{{ count($buku) }} judul tersedia di toko.</p>

    <div class="mt-6 overflow-x-auto border border-line bg-white">
        <table class="w-full min-w-[560px] text-sm">
            <thead>
                <tr class="border-b border-line text-left text-muted">
                    <th class="px-4 py-3 font-medium">Judul</th>
                    <th class="px-4 py-3 font-medium">Penulis</th>
                    <th class="px-4 py-3 font-medium">Kategori</th>
                    <th class="px-4 py-3 font-medium">Kondisi</th>
                    <th class="px-4 py-3 text-right font-medium">Harga</th>
                    <th class="px-4 py-3 text-right font-medium">Stok</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($buku as $item)
                    <tr class="border-b border-line last:border-b-0">
                        <td class="px-4 py-3 font-medium">{{ $item['judul'] }}</td>
                        <td class="px-4 py-3">{{ $item['penulis'] }}</td>
                        <td class="px-4 py-3">{{ $item['kategori'] }}</td>
                        <td class="px-4 py-3">{{ $item['kondisi'] }}</td>
                        <td class="px-4 py-3 text-right">Rp{{ number_format($item['harga'], 0, ',', '.') }}</td>
                        <td class="px-4 py-3 text-right">
                            {{ $item['stok'] }}
                            @if ($item['stok'] <= 2)
                                <span class="ml-2 text-leather">menipis</span>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
