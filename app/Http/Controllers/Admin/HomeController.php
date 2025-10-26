<?php

namespace App\Http\Controllers\Admin;

use App\Models\GeneralSetting;
use App\Models\HomePageContent;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

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

    public function homePageContent()
    {
    	return view('admin.home-page-content');
    }

    public function homePageContentUpdate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'main_heading' => 'required|string|max:255',
            'hero_image' => 'nullable|image|mimes:png,jpg,jpeg,svg|max:4096',
            'about_us_heading' => 'required|string|max:255',
            'about_us_image' => 'nullable|image|mimes:png,jpg,jpeg,svg|max:4096',
            'our_mission_main_heading' => 'required|string|max:255',
            'our_mission_image' => 'nullable|image|mimes:png,jpg,jpeg,svg|max:4096',
            'choose_us_main_heading' => 'required|string|max:255',
            'choose_us_image' => 'nullable|image|mimes:png,jpg,jpeg,svg|max:4096',
            'our_team_main_heading' => 'required|string|max:255',
            'testimonial_main_heading' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
            ], 422);
        }

        $setting = HomePageContent::first() ?? new HomePageContent();

        $data = $request->except(['hero_image', 'about_us_image', 'our_mission_image', 'choose_us_image']);

        if ($request->hasFile('hero_image')) {
            if ($setting->hero_image && Storage::disk('public')->exists($setting->hero_image)) {
                Storage::disk('public')->delete($setting->hero_image);
            }

            $data['hero_image'] = $request->file('hero_image')->store('home-page/hero_image', 'public');
        }

        if ($request->hasFile('about_us_image')) {
            if ($setting->about_us_image && Storage::disk('public')->exists($setting->about_us_image)) {
                Storage::disk('public')->delete($setting->about_us_image);
            }

            $data['about_us_image'] = $request->file('about_us_image')->store('home-page/about_us_image', 'public');
        }

        if ($request->hasFile('our_mission_image')) {
            if ($setting->our_mission_image && Storage::disk('public')->exists($setting->our_mission_image)) {
                Storage::disk('public')->delete($setting->our_mission_image);
            }

            $data['our_mission_image'] = $request->file('our_mission_image')->store('home-page/our_mission_image', 'public');
        }

        if ($request->hasFile('choose_us_image')) {
            if ($setting->choose_us_image && Storage::disk('public')->exists($setting->choose_us_image)) {
                Storage::disk('public')->delete($setting->choose_us_image);
            }

            $data['choose_us_image'] = $request->file('choose_us_image')->store('home-page/choose_us_image', 'public');
        }

        $setting->fill($data)->save();

        return response()->json([
            'success' => true,
            'message' => 'Home Page Content updated successfully!',
        ]);
    }
    
    public function changePassword()
    {
    	return view('admin.change-password');
    }

    public function changePasswordUpdate(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:6',
            'new_confirm_password' => 'required|same:new_password',
        ]);

        $admin = auth()->guard('admin')->user();

        if (!$admin) {
            return response()->json([
                'status' => 'error',
                'message' => 'Unauthorized access.',
            ], 401);
        }

        if (!Hash::check($request->old_password, $admin->password)) {
            return response()->json([
                'status' => 'error',
                'message' => 'Old password does not match our records.',
            ], 422);
        }

        $admin->update([
            'password' => Hash::make($request->new_password),
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Password changed successfully.',
        ]);
    }
}
