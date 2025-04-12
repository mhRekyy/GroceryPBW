<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string|max:1000',
        ]);

        // Bisa kirim email, simpan ke DB, atau kirim notifikasi di sini

        return redirect()->route('contact')->with('success', 'Message sent successfully! We\'ll get back to you soon.');
    }
}
