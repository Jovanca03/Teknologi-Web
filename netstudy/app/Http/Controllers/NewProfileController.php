<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class NewProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()) {
            $myName = "Annete Ompusunggu";
            $myBirthdate = "2004-04-23";
            $myBirthplace = "Surabaya";
            $myTelephone = "085850743564";
            $myAddress = "Surabaya";
            
            $profile = Profile::where('user_id', Auth::user()->id)->first();
            
            if (!$profile) {
                $profile = new Profile();
                $profile->name = $myName;
                $profile->birthdate = $myBirthdate;
                $profile->birthplace = $myBirthplace;
                $profile->telephone = $myTelephone;
                $profile->address = $myAddress;
                $profile->user_id = Auth::user()->id;
                $profile->save();
            }
            
            return view('myprofile', compact('myName', 'myBirthdate', 'myBirthplace', 'myTelephone', 'myAddress', 'profile'));
        } else {
            return redirect()->route('login');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
