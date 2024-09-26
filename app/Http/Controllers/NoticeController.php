<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    // Show the form to create a new notice
    public function showForm()
    {
        return view('notices.create'); // Blade view for creating a notice
    }

    // Store a newly created notice in the database
    public function store(Request $request)
    {
        // Create a new notice with the input data
        Notice::create($request->all());

        // Redirect back with success message
        return redirect('/notice')->with('success', 'Notice created successfully!');
    }
}
