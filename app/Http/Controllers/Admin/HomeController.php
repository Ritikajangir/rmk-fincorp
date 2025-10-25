<?php

namespace App\Http\Controllers\Admin;

use App\Models\GeneralSetting;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class HomeController
{
    public function index()
    {
    	return view('admin.dashboard');
    }

    public function generalSetting()
    {
    	return view('admin.general-settings');
    }

    public function generalSettingUpdate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'site_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:50',
            'address' => 'required|string|max:500',
            'about' => 'required|string|max:2000',
            'favicon' => 'nullable|image|mimes:png,jpg,jpeg,ico|max:2048',
            'logo' => 'nullable|image|mimes:png,jpg,jpeg,svg|max:4096',
            'facebook_link' => 'nullable|url|max:255',
            'twitter_link' => 'nullable|url|max:255',
            'linkedin_link' => 'nullable|url|max:255',
            'instagram_link' => 'nullable|url|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
            ], 422);
        }

        $setting = GeneralSetting::first() ?? new GeneralSetting();

        $data = $request->except(['favicon', 'logo']);

        if ($request->hasFile('favicon')) {
            if ($setting->favicon && Storage::disk('public')->exists($setting->favicon)) {
                Storage::disk('public')->delete($setting->favicon);
            }

            $data['favicon'] = $request->file('favicon')->store('uploads/favicon', 'public');
        }

        if ($request->hasFile('logo')) {
            if ($setting->logo && Storage::disk('public')->exists($setting->logo)) {
                Storage::disk('public')->delete($setting->logo);
            }

            $data['logo'] = $request->file('logo')->store('uploads/logo', 'public');
        }

        $setting->fill($data)->save();

        return response()->json([
            'success' => true,
            'message' => 'General settings updated successfully!',
        ]);
    }
}
