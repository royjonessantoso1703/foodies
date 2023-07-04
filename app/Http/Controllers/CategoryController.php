<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    public function index(){
        $data = Category::paginate(5);
        return view('datakategori',compact('data'));
    }

    public function create(){
        return view('tambahkategori');
    }

    public function store(Request $request){
        $data = Category::create($request->all());
        return redirect()->route('datakategori');
    }
}
