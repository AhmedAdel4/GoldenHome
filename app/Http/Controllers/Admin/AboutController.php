<?php

namespace App\Http\Controllers\Admin;

use App\group;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class AboutController extends Controller
{
      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = group::where("id","about")->first();
        
        return view('admin.About.about' , compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $group = group::where('id','about')->first();
        if($group == NULL)
        {
            $group = new group;
           $group->id = 'about';
           $this->validate($request,[
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
         ]);
        }

        $this->validate($request,[
            'textarea' => 'required',
        ]);
        
       
        
        if($request->has('image'))
        {
            if($group->image != null)
            {
                $image_path = public_path().'/images/about/'.$group->image;
                unlink($image_path);
            }
            $imageName = $request->image->getClientOriginalName();
            $resize = Image::make($request->image->getRealPath());
                $resize->resize(1500,720)->save(public_path().'/images/about/'.$imageName );
            $group->image = $imageName;
        }
        $group->text = $request->textarea;
        $group->save();
        
        
        return redirect(route('about.index'))->with('success','تمت العمليه بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
