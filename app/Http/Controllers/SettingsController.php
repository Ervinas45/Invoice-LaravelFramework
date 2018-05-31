<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Setting;

class SettingsController extends Controller
{
    public function index()
    {
		$settings = Setting::all();
		return view('settings', compact('settings'));
    }
    public function store(Request $request)
    {
		$input = $request->all();

		foreach ($input as $key => $value) 
		{
			$setting = Setting::ofKey($key)->update(['value' => $value]);			
		}
		return redirect()->route('dashboard');
    }
}
