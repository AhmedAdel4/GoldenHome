<?php

namespace App\Http\Controllers\Admin;

use App\manager;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class ManagerController extends Controller
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
        $managers = manager::all();
        return view('admin.Manager.show',[ "managers" => $managers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Manager.manager');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            ]);

            $manager = new manager;
            $manager->name = $request->name;
            $manager->description = $request->description;
            if($request->has('image'))
            {
                $imageName = $request->image->getClientOriginalName();
                $resize = Image::make($request->image->getRealPath());
                    $resize->resize(1151,1148)->save(public_path().'/images/manager/'.$imageName );
                $manager->image = $imageName;
            }
            $manager->save();
            return redirect(route('manager.index'))->with('success','تم أضافة مدير جديد');
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
        $manager = manager::where('id' , $id)->first();
        return view('admin.Manager.edit',[ "manager" => $manager]);
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
        $this->validate($request,[
            'name' => 'required',
            'description' => 'require',
            
            ]);
            $manager = manager::where('id' , $id)->first();
            $manager->name = $request->name;
            $manager->description = $request->description;
            if($request->has('image'))
            {
                $imageName = $request->image->getClientOriginalName();
                $resize = Image::make($request->image->getRealPath());
                    $resize->resize(1151,1148)->save(public_path().'/images/manager/'.$imageName );
                $manager->image = $imageName;
            }
            $manager->save();
            return redirect(route('manager.index'))->with('success','تم التعديل بنجاح');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        manager::where('id',$id)->delete();
        return redirect()->back();
    }
}
