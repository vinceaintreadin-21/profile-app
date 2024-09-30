<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function getAllProfiles(){
        $profiles = Profile::all();

        return view('profiles', ['boss'=>$profiles]);
    }

    public function getOneProfile($id){
        $profile = Profile::find($id);

        return view('profile', ['boss'=>$profile]);
    }
}
