<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Rack;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // 📖 Tampilkan semua buku
    public function index()
    {
        $books = Book::with(['category', 'rack'])->get();
        return view('books.index', compact('books'));
    }

    // ➕ Form tambah buku
    public function create()
    {
        $categories = Category::all();
        $racks = Rack::all();
        return view('books.create', compact('categories', 'racks'));
    }

    // 💾 Simpan buku baru
    public function store(Request $request)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'author'      => 'required|string|max:255',
            'category_id' => 'nullable|exists:categories,id',
            'rack_id'     => 'nullable|exists:racks,id',
            'stock'       => 'required|integer|min:0',
        ]);

        Book::create($request->all());
        return redirect()->route('books.index')->with('success', 'Buku berhasil ditambahkan!');
    }

    // 👁️ Detail buku
    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    // ✏️ Form edit buku
    public function edit(Book $book)
    {
        $categories = Category::all();
        $racks = Rack::all();
        return view('books.edit', compact('book', 'categories', 'racks'));
    }

    // 🔄 Update buku
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'author'      => 'required|string|max:255',
            'category_id' => 'nullable|exists:categories,id',
            'rack_id'     => 'nullable|exists:racks,id',
            'stock'       => 'required|integer|min:0',
        ]);

        $book->update($request->all());
        return redirect()->route('books.index')->with('success', 'Buku berhasil diperbarui!');
    }

    // ❌ Hapus buku
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index')->with('success', 'Buku berhasil dihapus!');
    }
}
