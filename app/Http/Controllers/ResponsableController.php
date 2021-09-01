<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Responsable;
use App\Http\Requests;

class ResponsableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $infirmiers=Responsable::latest()->paginate(25);
        return view('infirmier.index',compact('infirmiers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('responsable.create');
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
        $responsables = Responsable::create($request->all());
        return redirect()->route('responsable.index')
        ->with('success','responsable added successfully');$this->validate($request ,['nom'=>'required',
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
        $responsables = Responsable::findOrFail($id);
        return view('responsable.show',compact('responsables'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $infirmiers = Responsable::findOrFail($id);
        return view('responsable.edit',compact('responsables'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request ,$id){
        $responsables = Responsable::findOrFail($id);
        $responsables->nom=$request->nom;
        $responsables->prenom=$request->prenom;
        $responsables->email=$request->email;     
        $responsables->genre=$request->genre;
        $responsables->telephone=$request->telephone;
        $responsables->detail=$request->detail;
        $responsables->save();
        return redirect()->route('responsable.index')
        ->with('success','responsable update successfully');
    
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id )
    {
        $responsables = Responsable::find($id);
        $responsables->delete() ;

        return redirect()->route('responsable.index')
        ->with('success','responsable deleted successfully '); 
    }
}
