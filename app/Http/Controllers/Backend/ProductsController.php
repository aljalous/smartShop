<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\ProductImage;
use Intervention\Image\Facades\Image;


class ProductsController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth:admin');
  }

  public function index()
  {
    $products = Product::orderBy('id', 'desc')->get();
    return view('backend.pages.product.index')->with('products', $products);
  }

  public function create()
  {
    return view('backend.pages.product.create');
  }

  public function edit($id)
  {
    $product = Product::find($id);
    return view('backend.pages.product.edit')->with('product', $product);
  }



  public function store(Request $request)
  {
    $request->validate([
      'title' => 'required|max:150',
      'description' => 'required',
      'price' => 'required|numeric',
      'quantity' => 'required|numeric',
      'category_id' => 'required|numeric',
      'brand_id' => 'required|numeric',
      'product_image.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
    ]);

    $product = new Product;

    // تفاصيل المنتج
    $product->title = $request->title;
    $product->description = $request->description;
    $product->price = $request->price;
    $product->quantity = $request->quantity;
    $product->slug = Str::slug($request->title);
    $product->category_id = $request->category_id;
    $product->brand_id = $request->brand_id;
    $product->admin_id = 1;
    $product->save();

    if (count($request->product_image) > 0) {
      $i = 0;
      foreach ($request->product_image as $image) {


        $img = Image::make($image);
        $img->resize(800, 800, function ($constraint) {
          $constraint->aspectRatio();
          $constraint->upsize();
        });
        $img->encode('jpg', 1);
        $img_name = time() . $i . '.jpg';
        $location = 'images/products/' . $img_name;
        $img->save($location);
        $product_image = new ProductImage;
        $product_image->product_id = $product->id;
        $product_image->image = $img_name;
        $product_image->save();
        $i++;
      }
    }

    return redirect()->route('admin.products');
  }
  public function update(Request $request, $id)
  {

    $request->validate([
      'title'         => 'required|max:150',
      'description'     => 'required',
      'price'             => 'required|numeric',
      'quantity'             => 'required|numeric',
      'category_id'             => 'required|numeric',
      'brand_id'             => 'required|numeric',
    ]);

    $product = Product::find($id);

    $product->title = $request->title;
    $product->description = $request->description;
    $product->price = $request->price;
    $product->quantity = $request->quantity;
    $product->category_id = $request->category_id;
    $product->brand_id = $request->brand_id;
    $product->save();

    return redirect()->route('admin.products');
  }

  public function delete($id)
  {
    $product = Product::find($id);
    if (!is_null($product)) {
      $product->delete();
    }
    // Delete all images
    foreach ($product->images as $img) {
      // Delete from path
      $file_name = $img->image;
      if (file_exists("images/products/" . $file_name)) {
        unlink("images/products/" . $file_name);
      }

      $img->delete();
    }
    session()->flash('success', 'Product has deleted successfully !!');
    return back();
  }
}
