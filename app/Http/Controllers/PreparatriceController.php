<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Preparatrice;
use App\Http\Requests;

class PreparatriceController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $preparatrices=Preparatrice::latest()->paginate(25);
        return view('preparatrice.index',compact('preparatrices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('preparatrice.create');
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
        $preparatrices = Preparatrice::create($request->all());
        return redirect()->route('preparatrice.index')
        ->with('success','preparatrice added successfully');$this->validate($request ,['nom'=>'required',
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
        $preparatrices = Preparatrice::findOrFail($id);
        return view('preparatrice.show',compact('preparatrices'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $preparatrices = Preparatrice::findOrFail($id);
        return view('preparatrice.edit',compact('preparatrices'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request ,$id){
        $preparatrices = Preparatrice::findOrFail($id);
        $preparatrices->nom=$request->nom;
        $preparatrices->prenom=$request->prenom;
        $preparatrices->email=$request->email;     
        $preparatrices->genre=$request->genre;
        $preparatrices->telephone=$request->telephone;
        $preparatrices->detail=$request->detail;
        $preparatrices->save();
        return redirect()->route('preparatrice.index')
        ->with('success','preparatrice update successfully');
    
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id )
    {
        $preparatrices = Preparatrice::find($id);
        $preparatrices->delete() ;

        return redirect()->route('preparatrice.index')
        ->with('success','preparatrice deleted successfully '); 
    }
}
