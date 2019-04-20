<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    //
    function index() {
        return view('contact');
    }

    public function create() {
        return view('contact');
    }

    public function store(ContactRequest $request) {
        DB::table('contact')->insert(
            ['contact_name' => $request->input('contact_name'),
            'contact_email' => $request->input('contact_email'),
            'contact_message' =>  $request->input('contact_message')]
        );
        return view('confirm');
    }
}


