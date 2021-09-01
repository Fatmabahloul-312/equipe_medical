<?php

namespace App\Http\Controllers ;
namespace App\Http\Controllers;



use App\Http\Requests;

use App\Profile;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;
class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
   
    public function index()
    {
        $user = Auth::user();
        $id = Auth::id();

        return view('users.profile')->with('user',$user);
    }

 
    public function update(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'province'=>'required',
            'gender'=>'required',
            'bio'=>'required',
        ]);
        $user = Auth::user();
        $user->name=$request->name;
        $user ->profile->province=$request->province;
        $user ->profile->gender=$request->gender;
        $user ->profile->bio=$request->bio;
        $user->save();
        if($request->has('password')){
            $user->password=Hash::make($request->password);
            $user->save();
        }
        return redirect()->back();
    }

  
}