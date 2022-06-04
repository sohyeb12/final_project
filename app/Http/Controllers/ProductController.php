<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Contact;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        
         // $tasks = DB::table('tasks')->orderBy('name')->get(); 
         $products = Product::all();
         $contact = Contact::all();
       // dd($tasks);
        return view ('admin.products.index',compact('products','contact'));
    }

    public function create(Request $request){
        $contact = Contact::all();
        return view('admin.products.create',compact('contact'));
}  

public function store(Request $request){
    
    $product = new Product();
    $product->name = $request->product_name;
    $product->price = $request->product_price;
    $product->quantity = $request->product_qty;
    $product->details = $request->product_details;
    if($request->product_img){
      $image = time().'.'.$request->product_img->extension();
      $request->product_img->move(public_path('images'),$image);
      $product->image = $image;
    }

    $product->save();

    return redirect()->back();
} 

public function delete($id){

    $product = Product::find($id);
    $product->delete();
    return redirect()->back();
} 


public function update(Request $request){
    $product = Product::find($request->id);
    $contact = Contact::all();
     return view('admin.products.update',compact('product','contact'));
 }

 public function updateact(Request $request){
  
    Product::find($request->id);

    if ($request->product_image) {
        $imageName = time() . '.' . $request->product_image->extension();
        $request->product_image->move(public_path('images'), $imageName);
        $request->product_image = $imageName;
    } else {
        $request->product_image;
    }
     Product::where('id',$request->id)->update([
         'name' => $request->product_n,
         'details' => $request->product_d,
         'price' => $request->product_pr,
         'quantity' => $request->product_q,
         'image' => $request->product_image,
         'updated_at' => now() ,
         'created_at' => now()
     ]);
    return redirect()->to('admin/products');
 }

}
