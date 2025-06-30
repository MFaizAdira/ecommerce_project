<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class AdminController extends Controller
{
    public function view_category()
    {
        $data = Category::all();

        return view('admin.category',compact('data'));
    }

    public function add_category(Request $request)
    {

        $category = new Category;

        $category->category_name = $request->category_name;

        $category->save();

        return redirect()->back()->with('message', 'Category Added Successfully');


    }

    public function delete_category($id)
    {
        $data = Category::find($id);

        if ($data) {
            $data->delete();
            return redirect()->back()->with('message', 'Category Deleted Successfully');
        } else {
            return redirect()->back()->with('error', 'Category Not Found');
        }
    }

    public function edit_category($id)
    {
        $data = Category::find($id);

        if ($data) {
            return view('admin.edit_category', compact('data'));
        } else {
            return redirect()->back()->with('error', 'Category Not Found');
        }

    }
public function update_category(Request $request, $id)
{
    $data = Category::find($id);

    if ($data) {
        $data->category_name = $request->category_name;
        $data->save();
        // Redirect langsung ke halaman category
        return redirect('view_category')->with('message', 'Category Updated Successfully');
    } else {
        return redirect()->back()->with('error', 'Category Not Found');
    }
}

}

