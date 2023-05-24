@extends('layouts.app')

@section('content')
    <div class="content read">
        <h2>Detail Barang</h2>

        <div>
            <p><strong>Nama Produk:</strong> {{ $barang->nama_produk }}</p>
            <p><strong>Kode Produk:</strong> {{ $barang->kode_produk }}</p>
            <p><strong>Harga Produk:</strong> {{ $barang->harga_produk }}</p>
            <p><strong>Stok:</strong> {{ $barang->stok }}</p>
            <p><strong>Deskripsi:</strong> {{ $barang->deskripsi }}</p>
        </div>

        <div class="actions">
            <a href="{{ route('barang.edit', $barang->id) }}" class="edit">Edit</a>
            <form action="{{ route('barang.destroy', $barang->id) }}" method="POST" style="display: inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="trash" onclick="return confirm('Apakah Anda yakin ingin menghapus barang ini?')">Hapus</button>
            </form>
        </div>
    </div>
@endsection
