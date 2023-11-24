<?php

namespace App\Http\Controllers;

use App\Models\ProdukModels;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
   

    
    public function index()
    {
        $data = [
            'pageTitle' => 'Tentang Kami',
            'content' => 'Ini adalah halaman tentang kami.'
        ];
        return view('Produk', compact ('data'));
}



public function create(){
    $data = [
        'pageTitle' => 'Ini halaman create',
        'content' => 'Ini adalah halaman tentang kami.'
    ];
    return view('create', compact ('data'));
}



public function store(Request $request)
{
    $input = $request->all();
    $produk = ProdukModels::create([
        'nama' => $input['nama'],
        'harga' => $input['harga'],
        'keterangan' => $input['keterangan'],
     
       
    ]);

  
    return redirect('/produk')->with('success', 'Data berhasil ditambahkan');
}



public function edit($id)
    {
        $produk = ProdukModels::find($id);
        return response()->json($produk);
    }
    

public function update($id,Request $request){
$produk=[
    'id' => $request->id,
    'nama' => $request->nama,
    'harga' =>$request->harga,
    'keterangan' => $request->keterangan,
  
   
];
ProdukModels::find($id)->update($produk);
 return redirect ('/produk')->with('success','Data berhasil di ubah');
}

public function destroy($id){
  $produk= ProdukModels::find($id);
  if($produk){
    $produk->delete();
    return redirect ('/produk')->with('success','Data berhasil di Hapus');
  }
  return redirect ('/produk')->with('error','Data gagal di Hapus');
}
}
