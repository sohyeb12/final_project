<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show_categoery(){
        
         // $tasks = DB::table('tasks')->orderBy('name')->get(); 
         $categories = Category::all();
         $contact = Contact::all();
       // dd($tasks);
        return view ('admin.categories.category',compact('categories','contact'));
    }

    public function create(Request $request){
        $contact = Contact::all();
        return view('admin.categories.create',compact('contact'));
}  

public function store(Request $request){
    
    $category = new Category();
    $category->name = $request->category_name;
    $category->details = $request->category_details;
    $category->created_at = now();
    $category->updated_at = now();
    $category->save();
    return redirect()->back();
}


public function delete($id){

    $category = Category::find($id);
    $category->delete();
    return redirect()->back();
}

public function update(Request $request){
    $contact = Contact::all();
    $category = category::find($request->id);
    return view('admin.categories.update',compact('category','contact'));
 }

 public function updateact(Request $request){
  
    //  Category::find($request->id);

    // if ($request->product_image) {
    //     $imageName = time() . '.' . $request->product_image->extension();
    //     $request->product_image->move(public_path('images'), $imageName);
    //     $request->product_image = $imageName;
    // } else {
    //     $request->product_image;
    // }
     Category::where('id',$request->id)->update([
         'name' => $request->category_n,
         'details' => $request->category_d,
         'updated_at' => now() ,
         'created_at' => now()
     ]);
    return redirect()->to('admin/categories/category');
 }

}
