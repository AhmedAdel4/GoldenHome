<?php

namespace App\Http\Controllers\Admin;

use App\product;
use App\category;
use App\product_image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
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
        $products = product::all();
        return view("admin.product.show", compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = category::all();
        return  view('admin.product.product' , compact('categories'));
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
            'category' => 'required',
            'length-name' => 'required',
            'width-name' => 'required',
            'hight-name' => 'required',
            'length-value' => 'required|numeric',
            'width-value' => 'required|numeric',
            'hight-value' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            
         
        ]);
        $product = new product;
        $product->name = $request->name;
        if($request->hasFile('image'))
        {
            $imageName = $request->image->getClientOriginalName();
            $resize = Image::make($request->image->getRealPath());
                $resize->resize(400,400)->save(public_path().'/images/product/'.$imageName );
            
            
            $product->image = $imageName;
        }
        
        
        $product['length-name'] = $request['length-name'];
        $product['width-name'] = $request['width-name'];
        $product['hight-name'] = $request['hight-name'];
        $product->length = $request['length-value'];
        $product->width = $request['width-value'];
        $product->hight = $request['hight-value'];
        $product->category()->associate($request->category);
        $product->save();
        if($request->hasFile('files'))
        {
           
            foreach($request->file('files') as $file)
            {
                $imageName = $file->getClientOriginalName();
                $resize = Image::make($file->getRealPath());
                $resize->resize(400,400)->save(public_path().'/images/product/'.$imageName );
                $image = new product_image;
                $image->product_id = $product->id;
                $image->name = $imageName;
                $image->save();
                
                $product->images()->save( $image);
                
            }
        }
        
        return redirect(route('product.index'))->with('success','تم أضافة منتج جديد');
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
        $product = product::where('id',$id)->first();
        $categories = category::all();
        return view('admin.product.edit',compact('product' ,'categories'));
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
            'category' => 'required',
            'length-name' => 'required',
            'width-name' => 'required',
            'hight-name' => 'required',
            'length-value' => 'required|numeric',
            'width-value' => 'required|numeric',
            'hight-value' => 'required|numeric',
         
        ]);
        
        $product = product::find($id);
        $product->name = $request->name;
        if($request->hasFile('image'))
        {
            $imageName = $request->image->getClientOriginalName();
            $resize = Image::make($request->image->getRealPath());
            $resize->resize(400,400)->save(public_path().'/images/product/'.$imageName );
            
            
            $product->image = $imageName;
        }
       if($request->hasFile('files'))
        {
            $images = product_image::where('product_id',$product->id)->get();
            foreach($images as $image)
            {
                $image->delete();
            }
            foreach($request->file('files') as $file)
            {
                $imageName = $file->getClientOriginalName();
                $resize = Image::make($file->getRealPath());
                $resize->resize(400,400)->save(public_path().'/images/product/'.$imageName );
                $image = new product_image;
                $image->product_id = $product->id;
                $image->name = $imageName;
                $image->save();
                
                $product->images()->save( $image);
                
            }
        }
         
        
       
        $product['length-name'] = $request['length-name'];
        $product['width-name'] = $request['width-name'];
        $product['hight-name'] = $request['hight-name'];
        $product->length = $request['length-value'];
        $product->width = $request['width-value'];
        $product->hight = $request['hight-value'];
        $product->category()->associate($request->category);
        $product->save();
        return redirect(route('product.index'))->with('success','تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $product =  product::where('id',$id);
        $images = product_image::where('product_id',$product->id)->get();
        foreach($images as $image)
        {
            $image->delete();
        }
        $product->delete();
        return redirect()->back();
    }
}
