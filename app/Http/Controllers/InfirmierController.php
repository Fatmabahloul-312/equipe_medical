<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Infirmier;
use App\Http\Requests;

class InfirmierController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $infirmiers=Infirmier::latest()->paginate(25);
        return view('infirmier.index',compact('infirmiers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('infirmier.create');
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

        $infirmiers = Infirmier::create($request->all());
        return redirect()->route('infirmier.index')
        ->with('success','infirmier added successfully');$this->validate($request ,['nom'=>'required',
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
        $infirmiers = Infirmier::findOrFail($id);
        return view('infirmier.show',compact('infirmiers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $infirmiers = Infirmier::findOrFail($id);
        return view('infirmier.edit',compact('infirmiers'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request ,$id){
        $infirmiers = Infirmier::findOrFail($id);
        $infirmiers->nom=$request->nom;
        $infirmiers->prenom=$request->prenom;
        $infirmiers->email=$request->email;     
        $infirmiers->genre=$request->genre;
        $infirmiers->telephone=$request->telephone;
        $infirmiers->detail=$request->detail;
        $infirmiers->save();
        return redirect()->route('infirmier.index')
        ->with('success','infirmier update successfully');
    
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id )
    {
        $infirmiers = Infirmier::find($id);
        $infirmiers->delete() ;

        return redirect()->route('infirmier.index')
        ->with('success','infirmier deleted successfully '); 
    }
}
