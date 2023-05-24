@extends('layouts.app')

@section('content')

    <div class="container">
        <h2>Daftar Barang</h2>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a class="btn btn-primary" href="{{ route('barang.create') }}" class="create-contact">Tambah Barang</a>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Produk</th>
                    <th>Kode Produk</th>
                    <th>Harga Produk</th>
                    <th>Stok</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($barang as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama_produk }}</td>
                        <td>{{ $item->kode_produk }}</td>
                        <td>{{ $item->harga_produk }}</td>
                        <td>{{ $item->stok }}</td>
                        <td>{{ $item->deskripsi }}</td>
                        <td class="actions">
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <a class="btn btn-info" href="{{ route('barang.show', $item->id) }}" class="edit">Lihat</a>
                            <a class="btn btn-warning" href="{{ route('barang.edit', $item->id) }}" class="edit">Edit</a>
                            <form action="{{ route('barang.destroy', $item->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit" class="trash" onclick="return confirm('Apakah Anda yakin ingin menghapus barang ini?')">Hapus</button>
                            </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    
@endsection
