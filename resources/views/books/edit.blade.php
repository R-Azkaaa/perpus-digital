@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">✏️ Edit Buku</h1>

        <form action="{{ route('books.update', $book->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Judul</label>
                <input type="text" name="title" class="form-control" value="{{ $book->title }}" required>
            </div>

            <div class="mb-3">
                <label>Penulis</label>
                <input type="text" name="author" class="form-control" value="{{ $book->author }}" required>
            </div>

            <div class="mb-3">
                <label>Penerbit</label>
                <input type="text" name="publisher" class="form-control" value="{{ $book->publisher }}" required>
            </div>

            <div class="mb-3">
                <label>Tahun</label>
                <input type="number" name="year" class="form-control" value="{{ $book->year }}" required>
            </div>

            <div class="mb-3">
                <label>Kategori</label>
                <select name="category_id" class="form-control">
                    @foreach ($categories as $c)
                        <option value="{{ $c->id }}" {{ $book->category_id == $c->id ? 'selected' : '' }}>
                            {{ $c->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label>Rak</label>
                <select name="rack_id" class="form-control">
                    @foreach ($racks as $r)
                        <option value="{{ $r->id }}" {{ $book->rack_id == $r->id ? 'selected' : '' }}>
                            {{ $r->name }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('books.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection
