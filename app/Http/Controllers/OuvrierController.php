<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ouvrier;
use App\Http\Requests;

class OuvrierController extends Controller
{
 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ouvriers=Ouvrier::latest()->paginate(25);
        return view('ouvrier.index',compact('ouvriers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ouvrier.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    
    public function store(Request $request)
    {
        $this->validate( $request ,['nom'=>'required',
        'prenom'=>'required','email'=>'required','genre'=>'required','telephone'=>'required','detail'=>'required'
        
       
        

        ]);
        $ouvriers = Ouvrier::create($request->all());
        return redirect()->route('ouvrier.index')
        ->with('success','ouvrier added successfully');$this->validate($request ,['nom'=>'required',
        'prenom'=>'required', 'email'=>'required','genre'=>'required','telephone'=>'required','detail'=>'required'
        

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
        $ouvriers = Ouvrier::findOrFail($id);
        return view('ouvrier.show',compact('ouvriers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ouvriers = Ouvrier::findOrFail($id);
        return view('ouvrier.edit',compact('ouvriers'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request ,$id){
        $ouvriers = Ouvrier::findOrFail($id);
        $ouvriers->nom=$request->nom;
        $ouvriers->prenom=$request->prenom;
        $ouvriers->email=$request->email;     
        $ouvriers->genre=$request->genre;
        $ouvriers->telephone=$request->telephone;
        $ouvriers->detail=$request->detail;
        $ouvriers->save();
        return redirect()->route('ouvrier.index')
        ->with('success','ouvrier update successfully');
    
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id )
    {
        $ouvriers = Ouvrier::find($id);
        $ouvriers->delete() ;

        return redirect()->route('ouvrier.index')
        ->with('success','ouvrier deleted successfully '); 
    }
}
