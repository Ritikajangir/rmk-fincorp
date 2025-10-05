<?php

namespace App\Http\Controllers;

use App\Mail\ContactSubmissionMail;
use App\Models\Branch;
use App\Models\ContactUsSubmission;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function contactUs() 
    {
        $branches = Branch::all();
        return view('contact-us', compact('branches'));
    }

    public function submitContact(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'number'  => 'nullable|string|max:20',
            'message' => 'required|string|min:5',
        ]);

        if ($validated->fails()) {
            return response()->json([
                'errors' => $validated->errors(),
            ], 422);
        }

        $validatedData = $validated->validated();

        $submission = ContactUsSubmission::create([
            'name'    => $validatedData['name'],
            'email'   => $validatedData['email'],
            'phone'   => $validatedData['number'],
            'message' => $validatedData['message'],
        ]);

        $adminEmail = config('app.admin_address', 'admin@example.com');

        try {
            // Send email using more idiomatic syntax
            Mail::to($adminEmail)->send(new ContactSubmissionMail($submission));
        } catch (\Exception $e) {
            info('Contact form mail sending failed: ' . $e->getMessage());
            return response()->json(['message' => 'Submission saved but failed to send email.'], 500);
        }

        return response()->json(['message' => 'Submission successful. Thank you!']);
    }

    public function request()
    {
        return view('request');
    }

    public function receive()
    {
        return view('receive');
    }
}
