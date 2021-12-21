<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Orderan;

class myorderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Mengambil data faculty dan mengurutkannya dari kecil ke besar berdasarkan Id
        $orderans = Orderan::orderBy('id', 'ASC')->get();

        //mengirimkan variabel $faculties ke halaman views facultyCRUD/index.blade.php
        return view('OrderanCRUD.index', compact('orderans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //menampilkan halaman create
        return view ('OrderanCRUD.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //membuat validasi untuk create orderans wajib diisi
        $request->validate([
            'sender_name'=> 'required',
            'sender_origin'=> 'required',
            'phone_number'=> 'required',
            'post_code'=> 'required',
            'address1'=> 'required',
            'name_recip'=> 'required',
            'destination'=> 'required',
            'phone_recipt'=> 'required',
            'post_recipt'=> 'required',
            'address2'=> 'required',
            'item_name'=> 'required',
            'item_type'=> 'required',
            'service'=> 'required',
            'quantity'=> 'required',
            'weight'=> 'required',
            'height'=> 'required',
            'width'=> 'required',
            'length'=> 'required',
            'notes'=> 'required',
            'ordertype'=> 'required',
        ]);

        ///insert setiap request dari form ke dalam database via model
        ///jika menggunakan metode ini, maka nama field dan nama form harus sama
        Orderan::create($request->all());
        return redirect()->route('orderans.index')
        ->with('success','Item created successfully.');
        //mengirim email

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        ///cari berdasarkan id
        $orderans = Orderan::find($id);
        ///menampilkan view show dengan menyertakan data faculties
        return view('OrderanCRUD.show',compact('orderans'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        ///cari berdasarkan id
        $orderans = Orderan::find($id);
        ///menampilkan view edit dengan menyertakan data faculties
        return view('OrderanCRUD.edit',compact('orderans'));
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
        ///membuat validasi wajib diisi
        $request->validate([
            'sender_name'=> 'required',
            'sender_origin'=> 'required',
            'phone_number'=> 'required',
            'post_code'=> 'required',
            'address1'=> 'required',
            'name_recip'=> 'required',
            'destination'=> 'required',
            'phone_recipt'=> 'required',
            'post_recipt'=> 'required',
            'address2'=> 'required',
            'item_name'=> 'required',
            'item_type'=> 'required',
            'service'=> 'required',
            'quantity'=> 'required',
            'weight'=> 'required',
            'height'=> 'required',
            'width'=> 'required',
            'length'=> 'required',
            'notes'=> 'required',
            'ordertype'=> 'required',
        ]);


        ///mengubah data berdasarkan request dan parameter yang dikirimkan
        Orderan::find($id)->update($request->all());

        ///setelah berhasil mengubah data melempar ke faculties.index
        return redirect()->route('orderans.index')
                        ->with('success','Item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Orderan::find($id)->delete();
        ///melakukan hapus data berdasarkan parameter yang dikirimkan
        // $faculties->delete();

        return redirect()->route('orderans.index')
                        ->with('success','Item deleted successfully');
    }
}
?>