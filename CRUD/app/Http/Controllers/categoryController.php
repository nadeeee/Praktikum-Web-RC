<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function create()
    {
        return view('create-category');
    }

    public function index()
    {
        $categories = category::all();
        return view('category', compact('categories'));
    }

    public function store(Request $request)
    {
        category::create($request->all());
        return redirect('/category');
    }

    public function delete($id)
    {
        category::destroy($id);
        return back();
    }
}
