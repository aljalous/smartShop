<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Category;


class AdminController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth:admin');
  }
  public function show()
  {
    $admin = \App\Models\Admin::find(auth()->guard('admin')->user()->id);

    return view('backend.partials.edit-admin', compact('admin')) ;
  }


  public function show2()
{
    $admin = \App\Models\Admin::find(auth()->guard('admin')->user()->id);

    return view('backend.partials.left_sidebar', ['admin' => $admin]);
}


  public function update(Request $request)
  {
    $admin = \App\Models\Admin::find(auth()->guard('admin')->user()->id);

    $validatedData = $request->validate([
      'name' => 'required',
      'email' => 'required|email|unique:admins,email,' . $admin->id,
      'password' => 'nullable|min:6|confirmed',
      'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    // update the name and email
    $admin->name = $validatedData['name'];
    $admin->email = $validatedData['email'];

    if (!empty($validatedData['password'])) {
      $admin->password = Hash::make($validatedData['password']);
    }

    if ($request->hasFile('photo')) {
      $file = $request->file('photo');
      $filename = time() . '.' . $file->getClientOriginalExtension();
      $path = 'admins';
      $file->move($path, $filename);
      $admin->photo = $filename;
    }

    $admin->save();

    return redirect()->back()->with('success', 'تم تعديل بيانات الادمن بنجاح');
  }



  public function Pictures(){
    return view('backend.partials.Pictures_library');
}

public function Picturess()
{
  $Category = \App\Models\Category::all();
  return view('backend.partials.Pictures_library', ['Category' => $Category]);
}





}