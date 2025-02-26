<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    
    public function index(){
        $user = User::find(Auth::user()->id);
        
        if($user->account_type == "driver"){
            $driver = Driver::where('user_id' ,'=', $user->id)->get();
        }
        return view('profile.index',['user'=>$user,'driver'=>$driver[0]]);
    }

    public function update(Request $request){
        // dd($request);
        $validated = $request->validate([
                'firstname'=>['required','string'],
                'lastname'=>['required','string'],
                'email'=>['required','email'],
                'phone'=>'required'
            ]);

        $userUpdate = 
            [
                'firstname'=>$validated['firstname'],
                'lastname'=>$validated['lastname'],
                'email'=>$validated['email'],
                'phone'=>$validated['phone']
            ]
            ;

        $user = User::find(Auth::user()->id);

        if(Auth::user()->account_type == 'driver'){
            $driverAttributes['city'] = $request->validate(['city'=>'required']);
            $driver = Driver::where('user_id' ,'=', $user->id)->get();
        }

        $user->update($userUpdate);
        $driver[0]->update($driverAttributes['city']);

        return redirect('/profile');
    }

    public function updatePhoto(Request $request){
        $path['photo'] = [];
        if($request->hasfile('updated-photo')){
            $path['photo'] = $request->file('updated-photo')->store('photos','public');
        }

        if($path['photo']){
            $user = User::find(Auth::user()->id);
            $user->update($path);
        }

        return redirect('/profile');
    }

}
