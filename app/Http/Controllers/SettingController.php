<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        return $this->middleware('auth:admin');
    }
    public function index()
    {
        $setting = Setting::find(1);
        return view('admin.setting.index', compact('setting'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function webtitle(Request $request)
    {
        DB::table('settings')->where('id', 1)->update(['webtitle' => $request->input('webtitle')]);
        return redirect()->back()->with(["message" => 'website title updated']);
    }
    public function logo(Request $request, Setting $setting)
    {
        $validator = Validator::make($request->all(), [
            'logo' => 'image|mimes:jpeg,png,jpg',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $setting = Setting::find(1);

        $preimage = $setting->logo;
        if ($file = $request->file('logo')) {
            if (File::exists($preimage)) {
                File::delete($preimage);
            }

            $photo_name = $request->file('logo')->getClientOriginalExtension();

            $file->move(public_path() . '/uploads/setting/', 'logo' . '.' . $photo_name);
            $path = "uploads/setting/" . "logo" . '.' . $photo_name;
            $setting['logo'] = $path;
            $setting->update();
            return redirect()->back()->with(["message" => 'Update logo']);
        }

        //return redirect()->back()->with(["message"=>'Not Updated logo']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function favicon(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'favicon' => 'max:500',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $setting = Setting::find(1);
        $previmg = $setting->fabicon;
        if ($file = $request->file('favicon')) {
            if (File::exists($previmg)) {
                File::delete($previmg);
            }
            $photo_name = $request->file('favicon')->getClientOriginalExtension();

            $file->move(public_path() . '/uploads/setting/', 'favicon.' . $photo_name);
            $path = "uploads/setting/" . 'favicon.' . $photo_name;
            $setting['favicon'] = $path;
            $setting->update();
            return redirect()->back()->with('message', 'Successfuly favicon Update.');
        }
    }

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function social(Request $request)
    {
        $setting = Setting::find(1);
        // $setting->facebook_link = $request->input('facebook_link');
        // $setting->twitter_link = $request->input('twitter_link');
        // $setting->instragram_link = $request->input('instragram_link');
        // $setting->linkedin_link = $request->input('linkedin_link');
        $input = $request->all();
        $setting->update($input);
        return redirect()->back()->with(["message" => 'Social Link updated']);
    }
    public function office(Request $request)
    {
        $setting = Setting::find(1);
        $input = $request->all();
        $setting->update($input);
        return redirect()->back()->with(["message" => 'Office information updated']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function currencysymbl(Request $request)
    {
        $setting = Setting::find(1);
        $input = $request->all();
        $setting->update($input);
        return redirect()->back()->with(["message" => 'Currency Symbol updated']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        //
    }
}