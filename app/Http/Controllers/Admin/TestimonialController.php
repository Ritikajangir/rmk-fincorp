<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\DataTables\TestimonialDataTable;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(TestimonialDataTable $dataTable)
    {
        return $dataTable->render('admin.testimonials.index');
    } 

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'position' => 'nullable|string|max:255',
            'message' => 'required|string',
            'photo' => 'nullable|image|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
            ], 422);
        }
        
        $data = $request->all();

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('testimonials', 'public'); 
        }

        Testimonial::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Testimonial created successfully.',
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        return view('admin.testimonials.show', compact('testimonial'));
    }

    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'position' => 'nullable|string|max:255',
            'message' => 'required|string',
            'photo' => 'nullable|image|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
            ], 422);
        }

        $data = $request->all();

        if ($request->hasFile('photo')) {
            if ($testimonial->photo && Storage::disk('public')->exists($testimonial->photo)) {
                Storage::disk('public')->delete($testimonial->photo);
            }
            $data['photo'] = $request->file('photo')->store('testimonials', 'public');
        }

        $testimonial->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Testimonial updated successfully.',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();
        return response()->json([
            'success' => true,
            'message' => 'Testimonial deleted successfully.',
        ]);
    }
}
