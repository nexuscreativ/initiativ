<?php

namespace App\Http\Controllers;

use App\Models\Scholarship;
use Illuminate\Http\Request;

class ScholarshipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve all scholarships
        $scholarships = Scholarship::all();
        return view('scholarships.index', compact('scholarships'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Show a form to create a new scholarship
        return view('scholarships.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate request data
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:scholarships,email',
            'phone' => 'required|string',
            'nin' => 'required|string',
            'course' => 'required|string',
            'institute' => 'required|string',
            'level' => 'required|string',
            'cgpa' => 'required|string',
            'matric_no' => 'required|string',
        ]);

        // dd($validatedData);

        // Create a new scholarship
        $scholarship = Scholarship::create($validatedData);

        return redirect()->route('home')->with('success', 'Scholarship created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Retrieve a single scholarship
        $scholarship = Scholarship::findOrFail($id);
        return view('scholarships.show', compact('scholarship'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Retrieve the scholarship for editing
        $scholarship = Scholarship::findOrFail($id);
        return view('scholarships.edit', compact('scholarship'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate request data
        $validatedData = $request->validate([
            'photo' => 'string',
            'fname' => 'string|max:255',
            'lname' => 'string|max:255',
            'email' => 'email|unique:scholarships,email,' . $id,
            'phone' => 'string',
            'country' => 'string',
            'state' => 'string',
            'lga' => 'string',
            'address' => 'string',
            'gender' => 'in:male,female',
            'course' => 'string',
            'university' => 'string',
            'degree' => 'string',
            'level' => 'string',
            'cgpa' => 'string',
            'matriculation_no' => 'string',
            'status' => 'in:pending,approved,rejected',
        ]);

        // Find the scholarship and update it
        $scholarship = Scholarship::findOrFail($id);
        $scholarship->update($validatedData);

        return redirect()->route('scholarships.index')->with('success', 'Scholarship updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Find the scholarship and delete it
        $scholarship = Scholarship::findOrFail($id);
        $scholarship->delete();

        return redirect()->route('scholarships.index')->with('success', 'Scholarship deleted successfully.');
    }
}
