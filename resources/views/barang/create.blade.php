@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Tambah Barang</h2>

        <form action="{{ route('barang.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="nama_produk">Nama Produk</label>
                <input type="text" name="nama_produk" id="nama_produk" required>
            </div>

            <div class="form-group">
                <label for="kode_produk">Kode Produk</label>
                <input type="text" name="kode_produk" id="kode_produk" required>
            </div>

            <div class="form-group">
                <label for="harga_produk">Harga Produk</label>
                <input type="text" name="harga_produk" id="harga_produk" required>
            </div>

            <div class="form-group">
                <label for="stok">Stok</label>
                <input type="text" name="stok" id="stok" required>
            </div>

            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" rows="5" required></textarea>
            </div>

            <button type="submit" class="create">Tambah</button>
        </form>
    </div>
@endsection
