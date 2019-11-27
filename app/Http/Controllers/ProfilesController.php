<?php

namespace App\Http\Controllers;

use App\Breeder;
use App\Grazier;
use App\Investor;
use App\Seller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (Auth::guard('investor')->check()) {
            $investor = Investor::findOrFail($id);
            return view('profiles.show', compact('investor'));
        } elseif (Auth::guard('breeder')->check()) {
            $breeder = Breeder::findOrFail($id);
            return view('profiles.show', compact('breeder'));
        } elseif (Auth::guard('grazier')->check()) {
            $grazier = Grazier::findOrFail($id);
            return view('profiles.show', compact('grazier'));
        } elseif (Auth::guard('seller')->check()) {
            $seller = Seller::findOrFail($id);
            return view('profiles.show', compact('seller'));
        } elseif (Auth::guard('web')->check()) {
            $user = User::findOrFail($id);
            return view('profiles.show', compact('user'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Auth::guard('investor')->check()) {
            $investor = Investor::findOrFail($id);
            return view('profiles.edit', compact('investor'));
        } elseif (Auth::guard('breeder')->check()) {
            $breeder = Breeder::findOrFail($id);
            return view('profiles.edit', compact('breeder'));
        } elseif (Auth::guard('grazier')->check()) {
            $grazier = Grazier::findOrFail($id);
            return view('profiles.edit', compact('grazier'));
        } elseif (Auth::guard('seller')->check()) {
            $seller = Seller::findOrFail($id);
            return view('profiles.edit', compact('seller'));
        } elseif (Auth::guard('web')->check()) {
            $user = User::findOrFail($id);
            return view('profiles.edit', compact('user'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (Auth::guard('investor')->check()) {
//            $investor = Investor::findOrFail($id);
//            return view('profiles.show', compact('investor'));
        } elseif (Auth::guard('breeder')->check()) {
//            $breeder = Breeder::findOrFail($id);
//            return view('profiles.show', compact('breeder'));
        } elseif (Auth::guard('grazier')->check()) {
//            $grazier = Grazier::findOrFail($id);
//            return view('profiles.show', compact('grazier'));
        } elseif (Auth::guard('seller')->check()) {
//            $seller = Seller::findOrFail($id);
//            return view('profiles.show', compact('seller'));
        } elseif (Auth::guard('web')->check()) {
            $this->validate($request, [
                'photo_profile' => 'file|image|mimes:jpeg,png,jpg|max:2048',
                'name' => 'required',
                'email' => 'required|email',
                'username' => 'required|min:3|max:16',
            ]);
            $user = User::findOrFail($id);

            if (!empty($request->file('photo_profile'))) {
                $file = $request->file('photo_profile');
                $fileName = time() . "_" . $file->getClientOriginalName();
                $destination = 'images/photo_profile';
                $file->move($destination, $fileName);
            } else {
                $fileName = $user->photo_profile;
            }

            $user->update([
                'photo_profile' => $fileName,
                'name' => $request['name'],
                'email' => $request['email'],
                'username' => $request['username'],
            ]);

            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
