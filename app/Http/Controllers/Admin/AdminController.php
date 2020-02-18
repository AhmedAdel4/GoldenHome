<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
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
    
    public function index()
    {
        return view('admin.home');
    }

    public function Home()
    {
        return view('admin.home');
    }
    public function Header()
    {
        return view('admin.Header.header');
    }
    public function Category()
    {
        return view('admin.category.category');
    }
}
