<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;
class ContactController extends Controller
{
    public function index(Request $req){
        $contact = Contact::all();
        return  view('welcome')->with("contact",$contact);
    }
    public function add(Request $req){
        $contact = new Contact;
        $contact->email = $req->email;
        $contact->phone = $req->phone;
        $contact->name = $req->name;
        $contact->save();
        return redirect()->back();
    }
    public function delete(Request $req){
        $contact = Contact::find($req->id);
        $contact->delete();
        return redirect()->back();
    }
    public function edit(Request $req){
        $contact = Contact::find($req->id);
        return view('edit')->with("contact",$contact);
    }
    public function update(Request $req){
        $contact = Contact::find($req->id);
        $contact->update([
            'name' => $req->name,
            'phone' => $req->phone,
            'email' => $req->email,
        ]);
        return redirect()->back();
    }
}