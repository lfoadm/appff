<?php

namespace App\Http\Controllers;

use App\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
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
        $partners = Partner::all();
        //dd($partner);
        return view('layouts.partners.index', compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.partners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $partner = new Partner();
        //dd($partner);

        $partner->email             = $request->email;
        $partner->name              = $request->name;
        $partner->gender            = $request->gender;
        $partner->cpf               = $request->cpf;
        $partner->date_birth        = $request->date_birth;
        $partner->cell_phone        = $request->cell_phone;
        $partner->active            = 1;
        
        $partner->zip_code          = $request->zip_code;
        $partner->address_name      = $request->address_name;
        $partner->address_number    = $request->address_number;
        $partner->address_complement= $request->address_complement;
        $partner->neighborhood_name = $request->neighborhood_name;
        $partner->city_name         = $request->city_name;
        
        $partner->save();

        return redirect()->route('partners.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $partners = Partner::find($id);
        return view('layouts.partners.show', compact('partners'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$partners = Partner::find($id);
        //return view('layouts.partners.edit', compact('partners'));
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
        $partner = Partner::find($id);
        //dd($partner);

        $partner->email             = $request->email;
        $partner->name              = $request->name;
        $partner->gender            = $request->gender;
        $partner->cpf               = $request->cpf;
        $partner->date_birth        = $request->date_birth;
        $partner->cell_phone        = $request->cell_phone;
        $partner->active            = 1;
        
        $partner->zip_code          = $request->zip_code;
        $partner->address_name      = $request->address_name;
        $partner->address_number    = $request->address_number;
        $partner->address_complement= $request->address_complement;
        $partner->neighborhood_name = $request->neighborhood_name;
        $partner->city_name         = $request->city_name;
        
        $partner->save();

        return redirect()->route('partners.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
