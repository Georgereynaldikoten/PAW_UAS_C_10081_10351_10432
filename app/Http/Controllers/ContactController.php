<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Mengambil data faculty dan mengurutkannya dari kecil ke besar berdasarkan Id
        $contact = Contact::orderBy('id', 'ASC')->get();

        //mengirimkan variabel $faculties ke halaman views facultyCRUD/index.blade.php
        return view('contactCRUD.index', compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //menampilkan halaman create
        return view ('contactCRUD.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required',
            'phone_number'=> 'required',
            'address'=> 'required',
            'user_id',
        ]);

        ///insert setiap request dari form ke dalam database via model
        ///jika menggunakan metode ini, maka nama field dan nama form harus sama
        Contact::create($request->all());
        return redirect()->route('contact.index')
        ->with('success','Item created successfully.');
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
        $contact = Contact::find($id);
        ///menampilkan view show dengan menyertakan data faculties
        return view('contactCRUD.show',compact('contact'));
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
        $contact = Contact::find($id);
        ///menampilkan view edit dengan menyertakan data faculties
        return view('contactCRUD.edit',compact('contact'));
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
        $request->validate([
            'name'=> 'required',
            'phone_number'=> 'required',
            'address'=> 'required',
        ]);

        ///mengubah data berdasarkan request dan parameter yang dikirimkan
        Contact::find($id)->update($request->all());

        ///setelah berhasil mengubah data melempar ke faculties.index
        return redirect()->route('contact.index')
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
        Contact::find($id)->delete();
        ///melakukan hapus data berdasarkan parameter yang dikirimkan
        // $faculties->delete();

        return redirect()->route('contact.index')
                        ->with('success','Item deleted successfully');
    }
}
