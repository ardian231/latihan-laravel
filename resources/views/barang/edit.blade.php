@extends('layouts.app')

@section('content')
    <div class="content edit">
        <h2>Edit Barang</h2>

        <form action="{{ route('barang.update', $barang->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nama_produk">Nama Produk</label>
                <input type="text" name="nama_produk" id="nama_produk" value="{{ $barang->nama_produk }}" required>
            </div>

            <div class="form-group">
                <label for="kode_produk">Kode Produk</label>
                <input type="text" name="kode_produk" id="kode_produk" value="{{ $barang->kode_produk }}" required>
            </div>

            <div class="form-group">
                <label for="harga_produk">Harga Produk</label>
                <input type="text" name="harga_produk" id="harga_produk" value="{{ $barang->harga_produk }}" required>
            </div>

            <div class="form-group">
                <label for="stok">Stok</label>
                <input type="text" name="stok" id="stok" value="{{ $barang->stok }}" required>
            </div>

            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" rows="5" required>{{ $barang->deskripsi }}</textarea>
            </div>

            <button type="submit" class="update">Simpan</button>
        </form>
    </div>
@endsection
