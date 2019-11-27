<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Breeder;
use Illuminate\Http\Request;

class BreedersController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 5;

        if (!empty($keyword)) {
            $breeders = Breeder::where('name', 'LIKE', "%$keyword%")
                ->orWhere('address', 'LIKE', "%$keyword%")
                ->orWhere('company_name', 'LIKE', "%$keyword%")
                ->orWhere('company_address', 'LIKE', "%$keyword%")
                ->orWhere('phone_number', 'LIKE', "%$keyword%")
                ->orWhere('actor_status', 'LIKE', "%$keyword%")
                ->orWhere('short_description', 'LIKE', "%$keyword%")
                ->orWhere('email', 'LIKE', "%$keyword%")
                ->orWhere('username', 'LIKE', "%$keyword%")
                ->orWhere('password', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $breeders = Breeder::paginate($perPage);
        }

        return view('breeders.index', compact('breeders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('breeders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Requests\BreederFormValidate $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Requests\BreederFormValidate $request)
    {

        Breeder::create([
            'name' => $request['name'],
            'address' => $request['address'],
            'company_name' => $request['company_name'],
            'company_address' => $request['company_address'],
            'phone_number' => $request['phone_number'],
            'actor_status' => $request['actor_status'],
            'short_description' => $request['short_description'],
            'username' => $request['username'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
        ]);

        return redirect('breeders')->with('flash_message', 'Breeder added!');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $breeder = Breeder::findOrFail($id);

        return view('breeders.show', compact('breeder'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $breeder = Breeder::findOrFail($id);

        return view('breeders.edit', compact('breeder'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Requests\BreederFormValidate $request
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Requests\BreederFormValidate $request, $id)
    {

        $requestData = $request->all();

        $breeder = Breeder::findOrFail($id);
        $breeder->update($requestData);

        return redirect('breeders')->with('flash_message', 'Breeder updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Breeder::destroy($id);

        return redirect('breeders')->with('flash_message', 'Breeder deleted!');
    }
}
