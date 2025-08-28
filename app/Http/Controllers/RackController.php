<?php

namespace App\Http\Controllers;

use App\Models\Rack;
use Illuminate\Http\Request;

class RackController extends Controller
{
    public function index()
    {
        $racks = Rack::all();
        return view('racks.index', compact('racks'));
    }

    public function create()
    {
        return view('racks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        Rack::create($request->all());
        return redirect()->route('racks.index');
    }

    public function show(Rack $rack)
    {
        return view('racks.show', compact('rack'));
    }

    public function edit(Rack $rack)
    {
        return view('racks.edit', compact('rack'));
    }

    public function update(Request $request, Rack $rack)
    {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        $rack->update($request->all());
        return redirect()->route('racks.index');
    }

    public function destroy(Rack $rack)
    {
        $rack->delete();
        return redirect()->route('racks.index');
    }
}
