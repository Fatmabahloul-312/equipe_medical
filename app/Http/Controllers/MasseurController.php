<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Masseur;
use App\Http\Requests;

class MasseurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $masseurs=Masseur::latest()->paginate(25);
        return view('masseur.index',compact('masseurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('masseur.create');
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
        $medecins = Masseur::create($request->all());
        return redirect()->route('masseur.index')
        ->with('success','masseur added successfully');$this->validate($request ,['nom'=>'required',
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
        $masseurs = Masseur::findOrFail($id);
        return view('masseur.show',compact('masseurs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $masseurs = Masseur::findOrFail($id);
        return view('masseur.edit',compact('masseurs'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request ,$id){
        $masseurs = Masseur::findOrFail($id);
        $masseurs->nom=$request->nom;
        $masseurs->prenom=$request->prenom;
        $masseurs->email=$request->email;     
        $masseurs->genre=$request->genre;
        $masseurs->telephone=$request->telephone;
        $masseurs->detail=$request->detail;
        $masseurs->save();
        return redirect()->route('masseur.index')
        ->with('success','masseur update successfully');
    
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id )
    {
        $masseurs = Masseur::find($id);
        $masseurs->delete() ;

        return redirect()->route('masseur.index')
        ->with('success','masseur deleted successfully '); 
    }
}
