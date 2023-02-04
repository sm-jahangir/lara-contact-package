<?php

namespace Codersgift\Contact\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }
    public function store(Request $request)
    {
        return $request->all();
    }
}
