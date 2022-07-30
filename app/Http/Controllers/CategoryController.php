<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        $list = Category::orderBy('position', 'ASC')->get();
        return view('admincp.category.form', compact('list'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $category = new Category();
        $category->title = $data['title'];
        $category->slug = $data['slug'];
        $category->description = $data['description'];
        $category->status = $data['status'];
        $category->save();
        return redirect()->back();
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $category = Category::find($id);
        $list = Category::orderBy('position', 'ASC')->get();
        return view('admincp.category.form', compact('list', 'category'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $category = Category::find($id);
        $category->title = $data['title'];
        $category->slug = $data['slug'];
        $category->description = $data['description'];
        $category->status = $data['status'];
        $category->save();
        return redirect()->back();
    }

    public function destroy($id)
    {
        Category::find($id)->delete();
        return redirect()->back();
    }

    public function resorting(Request $request)
    {
        $data = $request->all();

        foreach ($data['array_id'] as $key => $value) {
            $category = Category::find($value);
            $category->position = $key;
            $category->save();
        }
    }
}
