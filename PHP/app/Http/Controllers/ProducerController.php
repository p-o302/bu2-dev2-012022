<?php

namespace App\Http\Controllers;

use App\Models\Producer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
class ProducerController extends Controller
{
    public function index()
    {
        $producers = Producer::all();
        return view('admin.producer')->with('producers', $producers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.createProducer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd('abc');
        $request->validate([
            // 'producer_id' => 'required',
            'producer_name' => 'required',
        ]);
        $input = $request->all();
        Producer::create($input);
        // dd($input);
        
        return Redirect::route('producer.index')->with('flash_message','Producer Added!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Producer $producer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($producer_id)
    {
        // $user = DB::table('users')->find(3);
        // $producers = Producer::table('producer')->find($producer_id);
        // return view('contacts.edit')->with('contacts', $contact);
        // return Redirect::route('producer.index')->with('flash_message','Producer Edited!!!');
        return view('admin.editProducer')->with('producers', Producer::find($producer_id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\producer $producer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $producer_id)
    {
        $request->validate([
            // 'title' => 'required',
            'producer_name' => 'required',
        ]);

        $producer_id->update($request->all());

        return Redirect::route('producer.index')->with('flash_message','Producer updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producer  $producer
     * @return \Illuminate\Http\Response
     */
    public function destroy($producer_id)
    {
        $producers = Producer::find($producer_id);
        Producer::destroy($producer_id);
        return redirect('producer.index')->with('flash_message', 'Contact deleted!');
    }
}
