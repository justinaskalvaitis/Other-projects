<?php

namespace App\Http\Controllers;
use App\Product;
use App\Category;
use App\Manufacturer;
use Illuminate\Http\Request;

class ManufacturerController extends Controller
{
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
        $manufacturers = Manufacturer::all();

        return view('manufacturer.index', ['list'=> $manufacturers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view ('manufacturer.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $manufacturer = new Manufacturer();
        $manufacturer->title = $request->title;
        $manufacturer->website_url = $request->website_url;
        $manufacturer->country = $request->country;

        $manufacturer->save();

        return redirect()->route('manufacturers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Manufacturer  $manufacturer
     * @return \Illuminate\Http\Response
     */
    public function show(Manufacturer $manufacturer)
    {
        return view('manufacturer.show', ['manufacturer'=>$manufacturer]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Manufacturer  $manufacturer
     * @return \Illuminate\Http\Response
     */
    public function edit(Manufacturer $manufacturer)
    {
        


        return view ('manufacturer.form', ['manufacturer' => $manufacturer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Manufacturer  $manufacturer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Manufacturer $manufacturer)
    {
        $manufacturer->title = $request->title;
        $manufacturer->website_url = $request->website_url;
        $manufacturer->country = $request->country;

        $manufacturer->update();

        return redirect()->route('manufacturers.index');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Manufacturer  $manufacturer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Manufacturer $manufacturer)
    {
        $manufacturer->delete();
       return redirect()->route('manufacturers.index');
    }
}
