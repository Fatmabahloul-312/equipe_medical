<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;

use App\Medecin;
use App\Http\Requests;

class MedecinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medecins=Medecin::latest()->paginate(25);
        return view('medecin.index',compact('medecins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medecin.create');
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
        'prenom'=>'required','email'=>'required','special'=>'required','operation'=>'required','age'=>'required','telephone'=>'required','detail'=>'required'
        
       
        

        ]);
        $medecins = Medecin::create($request->all());
        return redirect()->route('medecin.index')
        ->with('success','medecin added successfully');$this->validate($request ,['nom'=>'required',
        'prenom'=>'required', 'email'=>'required','special'=>'required','operation'=>'required','age'=>'required','telephone'=>'required','detail'=>'required'
        

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
        $medecins = Medecin::findOrFail($id);
        return view('medecin.show',compact('medecins'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medecins = Medecin::findOrFail($id);
        return view('medecin.edit',compact('medecins'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request ,$id){
        $medecins = Medecin::findOrFail($id);
        $medecins->nom=$request->nom;
        $medecins->prenom=$request->prenom;
        $medecins->email=$request->email;
        $medecins->special=$request->special;
        $medecins->age=$request->age;      
        $medecins->operation=$request->operation;
        $medecins->telephone=$request->telephone;
        $medecins->detail=$request->detail;
        $medecins->save();
        return redirect()->route('medecin.index')
        ->with('success','medecin update successfully');
    
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id )
    {
        $medecins = Medecin::find($id);
        $medecins->delete() ;

        return redirect()->route('medecin.index')
        ->with('success','medecin deleted successfully '); 
    }

    public function search()
    {
       $search_text=$_GET['query'];
        $medecins =  Medecin::Where('special' , 'LIKE' , '%' .  $search_text .'%')
                       ->orWhere('email' , 'LIKE' , '%' .  $search_text .'%')->get();

                     //  dd($user);

        return view('medecin.search',compact('medecins'));





    }
}
