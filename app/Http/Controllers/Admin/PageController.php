<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\DataTables\PageDataTable;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Page;

class PageController extends Controller
{
    public function index(PageDataTable $dataTable)
    {
        return $dataTable->render('admin.pages.index');
    }    

    public function create()
    {
        return view('admin.pages.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => [
                'required',
                'string',
                'max:255',
                Rule::unique('pages')->whereNull('deleted_at'),
            ],
            'summernote' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
            ], 422);
        }
        Page::create([
            'title' => $request->title,
            'content' => $request->summernote,
            'status' => $request->status,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Page created successfully.',
        ]);
    } 

    public function show(Page $page)
    {
        return view('admin.pages.show', compact('page'));
    }

    public function edit(Page $page)
    {
        return view('admin.pages.edit', compact('page'));
    }

    public function update(Request $request, Page $page)
    {
        $validator = Validator::make($request->all(), [
            'title' => [
                'required',
                'string',
                'max:255',
                Rule::unique('pages')
                    ->ignore($page->id)
                    ->whereNull('deleted_at'),
            ],
            'summernote' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
            ], 422);
        }

        $page->update([
            'title' => $request->title,
            'content' => $request->summernote,
            'status' => $request->status,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Page updated successfully.',
        ]);
    }

    public function destroy(Page $page)
    {
        $page->delete();
        return response()->json([
            'success' => true,
            'message' => 'Page deleted successfully.',
        ]);
    }
}
