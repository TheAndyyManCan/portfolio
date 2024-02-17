<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    public function index(){
        return view('admin.message.index', [
            'messages' => ContactMessage::paginate(10)
        ]);
    }

    public function create(){
        return view('contact', [
            'count' => ContactMessage::all()->count() + 26
        ]);
    }

    public function view(ContactMessage $contactmessage){
        if(!$contactmessage->read){
            $attributes = [
                'read' => true
            ];
            $contactmessage->update($attributes);
        }
        return view('admin.message.view', [
            'message' => $contactmessage
        ]);
    }
}
