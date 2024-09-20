<?php

namespace App\Http\Controllers;

use App\Models\nmn;
use Illuminate\Http\Request;

class NmnController extends Controller
{
    public function index()
    {
        $nmns = nmn::all();
        return view('index', compact('nmns'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        nmn::create($request->all());
        return redirect()->route('nmn.index');
    }

    public function show($id)
    {
        $nmn = nmn::find($id);
        return view('show', compact('nmn'));
    }

    public function edit($id)
    {
        $nmn = nmn::find($id);
        return view('edit', compact('nmn'));
    }

    public function update(Request $request, $id)
    {
        $nmn = nmn::find($id);
        $nmn->update($request->all());
        return redirect()->route('nmn.index');
    }

    public function destroy($id)
    {
        $nmn = nmn::find($id);
        $nmn->delete();
        return redirect()->route('nmn.index');
    }
}
