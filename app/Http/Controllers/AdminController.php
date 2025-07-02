<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

use App\Models\Product;

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

public function add_product()
{

    $category = Category::all();
    return view('admin.add_product',compact('category'));


}

public function upload_product(Request $request)
{
    $data = new Product;

    $data->title = $request->title;
    $data->description = $request->description;
    $data->prize = $request->prize;
    $data->quantity = $request->qty;
    $data->category = $request->category;
    $image = $request->image;
    if ($image) {
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('product', $imagename);
        $data->image = $imagename;
    } else {
        $data->image = null; // Set to null if no image is uploaded
    }

    $data->save();


    return redirect()->back()->with('message', 'Product Added Successfully');

}


public function view_product()
{
    $products = Product::all();
    return view('admin.view_product', compact('products'));
}

public function delete_product($id)
{
    $data = Product::find($id);

    $data->delete();

    return redirect()->back()->with('message', 'Product Deleted Successfully');
}

}
 