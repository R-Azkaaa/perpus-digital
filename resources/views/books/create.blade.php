@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">➕ Tambah Buku</h1>

        <form action="{{ route('books.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label>Judul</label>
                <input type="text" name="title" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Penulis</label>
                <input type="text" name="author" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Penerbit</label>
                <input type="text" name="publisher" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Tahun</label>
                <input type="number" name="year" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Kategori</label>
                <select name="category_id" class="form-control">
                    <option value="">-- Pilih Kategori --</option>
                    @foreach ($categories as $c)
                        <option value="{{ $c->id }}">{{ $c->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label>Rak</label>
                <select name="rack_id" class="form-control">
                    <option value="">-- Pilih Rak --</option>
                    @foreach ($racks as $r)
                        <option value="{{ $r->id }}">{{ $r->code }} - {{ $r->location }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label>Stok</label>
                <input type="number" name="stock" class="form-control" value="0" required>
            </div>


            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="{{ route('books.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection
