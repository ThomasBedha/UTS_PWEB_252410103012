<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // data buku disimpan di sini, tidak pakai database
    private function buku(): array
    {
        return [
            ['judul' => 'Laskar Pelangi', 'penulis' => 'Andrea Hirata', 'kategori' => 'Novel', 'kondisi' => 'Bagus', 'harga' => 45000, 'stok' => 4],
            ['judul' => 'Bumi Manusia', 'penulis' => 'Pramoedya Ananta Toer', 'kategori' => 'Novel', 'kondisi' => 'Cukup', 'harga' => 60000, 'stok' => 2],
            ['judul' => 'Filosofi Teras', 'penulis' => 'Henry Manampiring', 'kategori' => 'Non-fiksi', 'kondisi' => 'Bagus', 'harga' => 55000, 'stok' => 5],
            ['judul' => 'Cantik Itu Luka', 'penulis' => 'Eka Kurniawan', 'kategori' => 'Novel', 'kondisi' => 'Lecet', 'harga' => 40000, 'stok' => 1],
            ['judul' => 'Habis Gelap Terbitlah Terang', 'penulis' => 'R.A. Kartini', 'kategori' => 'Sejarah', 'kondisi' => 'Cukup', 'harga' => 35000, 'stok' => 3],
            ['judul' => 'Negeri 5 Menara', 'penulis' => 'Ahmad Fuadi', 'kategori' => 'Novel', 'kondisi' => 'Bagus', 'harga' => 42000, 'stok' => 6],
            ['judul' => 'Atomic Habits', 'penulis' => 'James Clear', 'kategori' => 'Pengembangan Diri', 'kondisi' => 'Bagus', 'harga' => 70000, 'stok' => 2],
            ['judul' => 'Sapiens', 'penulis' => 'Yuval Noah Harari', 'kategori' => 'Non-fiksi', 'kondisi' => 'Cukup', 'harga' => 85000, 'stok' => 1],
        ];
    }

    // halaman login
    public function login()
    {
        return view('login');
    }

    // ambil username dari form lalu pindah ke dashboard
    public function prosesLogin(Request $request)
    {
        $username = trim($request->input('username', ''));
        if ($username === '') {
            $username = 'Admin';
        }

        return redirect('/dashboard?username=' . urlencode($username));
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username') ?: 'Admin';
        $buku = $this->buku();

        // hitung ringkasan dari array buku
        $totalJudul = count($buku);
        $totalStok = 0;
        $stokMenipis = 0;
        foreach ($buku as $item) {
            $totalStok += $item['stok'];
            if ($item['stok'] <= 2) {
                $stokMenipis++;
            }
        }

        return view('dashboard', compact('username', 'totalJudul', 'totalStok', 'stokMenipis'));
    }

    public function pengelolaan(Request $request)
    {
        $username = $request->query('username') ?: 'Admin';
        $buku = $this->buku();

        return view('pengelolaan', compact('username', 'buku'));
    }

    public function profile(Request $request)
    {
        $username = $request->query('username') ?: 'Admin';

        return view('profile', compact('username'));
    }
}
