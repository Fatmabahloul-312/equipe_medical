<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sage;
use App\Http\Requests;

class SageController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sages=Sage::latest()->paginate(25);
        return view('sage.index',compact('sages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sage.create');
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
        'prenom'=>'required','email'=>'required','age'=>'required','telephone'=>'required','detail'=>'required'
        
       
        

        ]);
        $sages = Sage::create($request->all());
        return redirect()->route('sage.index')
        ->with('success','sage added successfully');$this->validate($request ,['nom'=>'required',
        'prenom'=>'required', 'email'=>'required','age'=>'required','telephone'=>'required','detail'=>'required'
        

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
        $sages = Sage::findOrFail($id);
        return view('sage.show',compact('sages'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sages = Sage::findOrFail($id);
        return view('sage.edit',compact('sages'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request ,$id){
        $sages = Sage::findOrFail($id);
        $sages->nom=$request->nom;
        $sages->prenom=$request->prenom;
        $sages->email=$request->email;     
        $sages->age=$request->age;
        $sages->telephone=$request->telephone;
        $sages->detail=$request->detail;
        $sages->save();
        return redirect()->route('sage.index')
        ->with('success','sage update successfully');
    
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id )
    {
        $sages = Sage::find($id);
        $sages->delete() ;

        return redirect()->route('sage.index')
        ->with('success','sage deleted successfully '); 
    }
}
