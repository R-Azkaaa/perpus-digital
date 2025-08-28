@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tambah Kategori</h1>

        <form action="{{ route('categories.store') }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="name">Nama Kategori</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <button class="btn btn-success">Simpan</button>
            <a href="{{ route('categories.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection
