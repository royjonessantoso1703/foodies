<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function index(){
        $data = Food::paginate(5);
        return view('datamakanan',compact('data'));
    }

    public function tambahmakanan(){
        $datakategori = Category::all();
        return view('tambahdata',compact('datakategori'));
    }
    //memasukkan data ke database (pakai Request)
    public function insertmakanan(Request $request){
        $data = Food::create($request->all());
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotomakanan/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('makanan')->with('success','Data Berhasil di Tambah');
    }
    //cari data untuk di update
    public function tampilmakanan($id){
        $data = Food::find($id);
        return view('tampildata', compact('data'));
    }
    //update data (pakai Request)
    public function updatemakanan(Request $request, $id){
        $data = Food::find($id);
        $data->update($request->all());
        return redirect()->route('makanan')->with('primary','Data Berhasil di Update');
    }
    //delete data
    public function deletemakanan($id){
        $data = Food::find($id);
        $data->delete();
        return redirect()->route('makanan')->with('danger','Data Berhasil di Hapus');
    }
}
