<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SliderRequest;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use App\Models\Slider;

class SliderController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider = Slider::paginate(10);
        return view('admin.slider.index',compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SliderRequest $request)
    {
        //return $request->all();
        $validator = Validator::make($request->all(),[
            'heading'=>'required|string',
            'description'=>'required|string',
            'image'=>'image:jpg,gif',
            'status'=>'in:0,1',
        ]);
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $slider = New Slider();
        $preimage = $slider->image;
        $slider->fill($request->all());
        if ($file = $request->file('image'))
        {
            if (File::exists($preimage)){
                File::delete($preimage);
            }

            $photo_name = $request->file('image')->getClientOriginalExtension();
            $photogetname = $request->file('image')->getClientOriginalName();
            $encode = base64_encode($photogetname);
            $file->move(public_path().'/uploads/slider/',$encode.'.'.$photo_name);
            $path = "uploads/slider/".$encode.'.'.$photo_name;
            $slider['image'] = $path;
            $slider->save();
            return redirect()->route('admin.sliders.index')->with(["message"=>'Slider Created']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        return view('admin.slider.show',["slider"=>$slider]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        return view('admin.slider.edit',["slider"=>$slider]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(SliderRequest $request, Slider $slider)
    {
        $validator = Validator::make($request->all(),[
            'heading'=>'required|string',
            'description'=>'required|string',
            'image'=>'image:jpg,gif',

        ]);
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $preimage = $slider->image;
        $input = $request->all();
        if ($file = $request->file('image'))
        {
            if (File::exists($preimage)){
                File::delete($preimage);
            }

            $photo_name = $request->file('image')->getClientOriginalExtension();
            $photogetname = $request->file('image')->getClientOriginalName();
            $encode = base64_encode($photogetname);
            $file->move(public_path().'/uploads/slider/',$encode.'.'.$photo_name);
            $path = "uploads/slider/".$encode.'.'.$photo_name;
            $slider['image'] = $path;
            $slider->update();
            return redirect()->back()->with(["message"=>'Slider CreatedImage updated']);
        }
        $slider->update($input);
        return redirect()->route('admin.sliders.index')->with(["message"=>'Slider Updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function chnageStatus(Request $request)
    {
        $slider = Slider::find($request->activeid);
        $slider->status = $request->status;
        $slider->save();
        return response()->json(['message'=>"status changes",'status'=>true]);
    }
    public function delete($id)
    {
        $slider = Slider::findOrFail($id);

        return view('admin.slider.delete',compact('slider'));
    }
    public function destroy(Slider $slider)
    {
        if(file_exists($slider->image))
        {
            unlink($slider->image);
            $slider->delete();
            return redirect()->route('admin.sliders.index')->with(["message"=>'Slider deleted']);
        }
        else
        {
            $slider->delete();
            return redirect()->route('admin.sliders.index')->with(["error"=>'slider deleted but image not finding']);
        }
    }
}