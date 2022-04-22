<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;


class CategoryController extends Controller
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
        $category = Category::getAllCategory();
        return view('admin.category.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parent_cats = Category::where('is_parent',1)->orderBy('cate_name','ASC')->get();
        return view('admin.category.create',compact('parent_cats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'cate_name' => 'required|string|unique:categories,cate_name',
            'slug' => 'required|alpha_dash',
            'status' => 'in:0,1',
        ],
    [
        'cate_name.required'=>"category name must is required",
        "cate_name.string"=>"category name must be string",
        "slug.required"=>"category slug must be required",
        
    ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $category = new Category();
        $preimage = $category->image;
        $category->fill($request->all());
        if ($file = $request->file('image')) {
            if (File::exists($preimage)) {
                File::delete($preimage);
            }
            // $img = $request->file('care_image');
            $photo_name = $request->file('image')->getClientOriginalExtension();
            $photogetname = $request->file('image')->getClientOriginalName();
            $encode = base64_encode($photogetname);
            //
            // $imgsize = Image::make($img->path());
            // $imgsize->resize(540,616,function($const){
            //     $const->aspectRatio();
            // })->save(public_path('/uploads/category/'.$photo_name));
            $file->move(public_path() . '/uploads/category/', $encode . '.' . $photo_name);
            $path = "uploads/category/" . $encode . '.' . $photo_name;
            $category['image'] = $path;
        }
        $category->save();
        return redirect()->route('admin.category.index')->with(["message" => 'Category Created']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return view('admin.category.show', ["category" => $category]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $parent_cats=Category::where('is_parent',1)->get();
        return view('admin.category.edit', ["category" => $category,"parent_cats"=>$parent_cats]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'cate_name' => 'required|string|unique:categories,cate_name,' . $category->id,
                'slug' => 'required|alpha_dash',
            ],
            [
                "cate_name.required" => "category name is required",
                "cate_name.string"=>"category name must be string",
                "slug.required" => "category link is required",
            ]
        );
        $preimage = $category->image;
        $input = $request->all();
        $category->update($input);
        if ($file = $request->file('image')) {
            if (File::exists($preimage)) {
                File::delete($preimage);
            }
            // $img = $request->file('care_image');
            $photo_name = $request->file('image')->getClientOriginalExtension();
            $photogetname = $request->file('image')->getClientOriginalName();
            $encode = base64_encode($photogetname);
            //
            // $imgsize = Image::make($img->path());
            // $imgsize->resize(540,616,function($const){
            //     $const->aspectRatio();
            // })->save(public_path('/uploads/category/'.$photo_name));
            $file->move(public_path() . '/uploads/category/', $encode . '.' . $photo_name);
            $path = "uploads/category/" . $encode . '.' . $photo_name;
            $category['image'] = $path;
            $category->update();
            return redirect()->back()->with(['message' => 'category Image updated']);
        }
        return redirect()->route('admin.category.index')->with(["message" => 'category updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */

    public function chnageStatus(Request $request)
    {
        $category = Category::find($request->activeid);
        $category->status = $request->status;
        $category->save();
        return response()->json(['message' => "status changes", 'status' => true]);
    }
    public function delete($id)
    {
        $category = Category::findOrFail($id);

        return view('admin.category.delete', compact('category'));
    }
    public function destroy(Category $category)
    {
        // $product = Product::where('category_id', $category->id)->get();

        // foreach ($product as $key => $val) {
        //     $proid = $val->id;
        //     unlink($val->pro_image);
        // }
        // $gallery = Gallery::where('product_id', '=', $proid)->get();
        // foreach ($gallery as $galleries) {
        //     unlink($galleries->Oriimage);
        //     unlink($galleries->imgThumbnail);
        //     unlink($galleries->imgPreview);
        // }
        //$category->gallery()->delete();
        //$category->product()->delete();

            //$child_cat_id=Category::where('parent_id',$id)->pluck('id');
        
        
        if (file_exists($category->image)) {
            unlink($category->image);
            $category->delete();
            return redirect()->route('admin.category.index')->with(["success" => 'image not find']);
        } else {
            $category->delete();
            return redirect()->route('admin.category.index')->with(["success" => 'category deleted']);
        }
    }
}