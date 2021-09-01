<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Surveillant;
use App\Http\Requests;

class SurveillantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $surveillants=Surveillant::latest()->paginate(25);
        return view('surveillant.index',compact('surveillants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('surveillant.create');
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
        $surveillants = Surveillant::create($request->all());
        return redirect()->route('surveillant.index')
        ->with('success','surveillant added successfully');$this->validate($request ,['nom'=>'required',
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
        $surveillants = Surveillant::findOrFail($id);
        return view('surveillant.show',compact('surveillants'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $surveillants = Surveillant::findOrFail($id);
        return view('surveillant.edit',compact('surveillants'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request ,$id){
        $surveillants = Surveillant::findOrFail($id);
        $surveillants->nom=$request->nom;
        $surveillants->prenom=$request->prenom;
        $surveillants->email=$request->email;     
        $surveillants->genre=$request->genre;
        $surveillants->telephone=$request->telephone;
        $surveillants->detail=$request->detail;
        $surveillants->save();
        return redirect()->route('surveillant.index')
        ->with('success','surveillant update successfully');
    
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id )
    {
        $surveillants = Surveillant::find($id);
        $surveillants->delete() ;

        return redirect()->route('surveillant.index')
        ->with('success','surveillant deleted successfully '); 
    }
}
