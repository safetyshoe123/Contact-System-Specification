<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $contacts = Contact::paginate(10);
        return view('contacts', compact('contacts'));
    }

    public function create() {
        return view('contact.create');
    }

    public function store(Request $request) {
        
        $data = $request->validate([
            'name' => 'required',
            'company' => 'required',
            'phone' => 'required',
            'email' => 'required|unique:email',
        ]);

        $contactsExist = Contact::where('email', '=', $data['email'])->first();

        if($contactsExist == null) {
            Contact::create($data);
            return redirect()->route('contacts')->with('success', 'Contact created successfully.');
        }

        return redirect()->route('contacts')->with('error', 'Contact already exist.');
    }

    public function show(Contact $contact) {
        
        return view('contact.show', compact('contact'));
    }

    public function edit(Contact $contact) {
        
        return view('contact.edit', compact('contact'));
    }

    public function update(Request $request, Contact $contact) {
        $data = $request->validate();

        $contact->update($data);
        return redirect()->route('contact.update')->with('success', 'Company updated successfully.');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete($contact);
        return redirect()->route('contact.destroy')->with('success', 'Company deleted successfully.');
    }
}
