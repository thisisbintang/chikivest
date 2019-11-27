<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Grazier;
use Illuminate\Http\Request;

class GraziersController extends Controller
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
            $graziers = Grazier::where('name', 'LIKE', "%$keyword%")
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
            $graziers = Grazier::paginate($perPage);
        }

        return view('graziers.index', compact('graziers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('graziers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Requests\GrazierFormValidate $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Requests\GrazierFormValidate $request)
    {

        Grazier::create([
            'name' => $request['name'],
            'address' => $request['address'],
            'company_name' => $request['company_name'],
            'company_address' => $request['company_address'],
            'phone_number' => $request['phone_number'],
            'actor_status' => 'Peternak',
            'short_description' => $request['short_description'],
            'username' => $request['username'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
        ]);

        return redirect('graziers')->with('flash_message', 'Grazier added!');
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
        $grazier = Grazier::findOrFail($id);

        return view('graziers.show', compact('grazier'));
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
        $grazier = Grazier::findOrFail($id);

        return view('graziers.edit', compact('grazier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Requests\GrazierFormValidate $request
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Requests\GrazierFormValidate $request, $id)
    {

        $requestData = $request->all();

        $grazier = Grazier::findOrFail($id);
        $grazier->update($requestData);

        return redirect('graziers')->with('flash_message', 'Grazier updated!');
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
        Grazier::destroy($id);

        return redirect('graziers')->with('flash_message', 'Grazier deleted!');
    }
}
