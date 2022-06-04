<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    
    public function index()
    {
        $about = About::get()->first();
        return view('contact',compact('about'));
    }
    
    public function save(Request $request){
      $connection = new Contact();
      $connection->name = $request->name;
      $connection->email = $request->email;
      $connection->subject = $request->subject;
      $connection->message = $request->message;
      $connection->phone_number = $request->phone;
      $connection->save();
      return redirect()->back();
    }

    public function all()
    {
          $contact = Contact::all();
        return view('admin.contactall',compact('contact'));
    }

    public function replay(Request $request)
    {
        $contact = Contact::all();
        $contacts = Contact::find($request->id);
        return view('admin.replay',compact('contact','contacts'));
    }

    public function replay_act(Request $request){
        Contact::find($request->id);

        Contact::where('id',$request->id)->update([
        'replay' => $request->replay]);
    return redirect()->to('/');
    }
}
