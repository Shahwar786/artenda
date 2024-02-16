<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DragAndDropController extends Controller
{
    public function index()
    {
        return view('drag-and-drop');
    }

    public function saveForm(Request $request)
    {
        // Validate incoming request if needed
        $request->validate([
            'data' => 'required|json',
        ]);

        // Save form data to the database
        $formData = FormData::create([
            'data' => $request->input('data'),
        ]);

        return response()->json(['message' => 'Form data saved successfully', 'formData' => $formData], 200);
    }
    public function showDragAndDropPage()
    {
        return view('drag-and-drop');
    }
}
