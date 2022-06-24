<?php

namespace App\Http\Controllers;


use App\Models\Visitors;
use Illuminate\Http\Request;

class VisitorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $visitors = Visitors::all();
        return view('visitors.index')->with([
            'visitors' => $visitors
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('visitors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'registration_number' => 'required|numeric|unique:visitors,registration_number',
            'fullname' => 'required|unique:visitors,fullname',
            'depart' => 'required',
            'hire_date' => 'required|after:yesterday', // Permet d'empêcher l'utilisateur d'entrer une date ancienne (i.e. être à jour)
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required',
        ]);
        Visitors::create($request->except('_token'));
        return redirect()->route('visitors.index')->with([
            'success' => 'Visitor added successfully'
        ]);
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
        $visitor = Visitors::where('registration_number', $id)->first();
        return view('visitors.show')->with([
            'visitor' => $visitor
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $visitor = Visitors::where('registration_number', $id)->first();
        return view('visitors.edit')->with([
            'visitor' => $visitor
        ]);
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
        //
        $visitor = Visitors::where('registration_number', $id)->first();
        $this->validate($request,[
            'registration_number' => 'required|numeric|unique:visitors,id,' . $visitor->registration_number,
            'fullname' => 'required|unique:visitors,id,' . $visitor->fullname,
            'depart' => 'required',
            'hire_date' => 'required|after:yesterday', // Permet d'empêcher l'utilisateur d'entrer une date ancienne (i.e. être à jour)
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required',
        ]);
        $visitor->update($request->except('_token','_method'));
        return redirect()->route('visitors.index')->with([
            'success' => 'Visitor updated successfully'
        ]);
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
        $visitor = Visitors::where('registration_number', $id)->first();
        $visitor->delete();
        return redirect()->route('visitors.index')->with([
            'success' => 'Visitor deleted successfully'
        ]);
    }

    public function vacationRequest($id) 
    {
        $visitor = Visitors::where('registration_number',$id)->first();
        return view('visitors.vacation-request')->with([
            'visitor' => $visitor
        ]);
    }
    public function certificateRequest($id) 
    {
        $visitor = Visitors::where('registration_number',$id)->first();
        return view('visitors.certificate-request')->with([
            'visitor' => $visitor
        ]);
    }
}
