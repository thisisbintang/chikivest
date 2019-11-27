<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Investor;
use Illuminate\Http\Request;

class InvestorsController extends Controller
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
            $investors = Investor::where('name', 'LIKE', "%$keyword%")
                ->orWhere('address', 'LIKE', "%$keyword%")
                ->orWhere('company_name', 'LIKE', "%$keyword%")
                ->orWhere('company_address', 'LIKE', "%$keyword%")
                ->orWhere('phone_number', 'LIKE', "%$keyword%")
                ->orWhere('actor_status', 'LIKE', "%$keyword%")
                ->orWhere('short_description', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $investors = Investor::paginate($perPage);
        }

        return view('investors.index', compact('investors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('investors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Requests\InvestorFormValidate $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Requests\InvestorFormValidate $request)
    {

        Investor::create([
            'name' => $request['name'],
            'address' => $request['address'],
            'company_name' => $request['company_name'],
            'company_address' => $request['company_address'],
            'phone_number' => $request['phone_number'],
            'actor_status' => 'Investor',
            'short_description' => $request['short_description'],
            'username' => $request['username'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
        ]);

        return redirect('investors')->with('flash_message', 'Investor added!');
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
        $investor = Investor::findOrFail($id);

        return view('investors.show', compact('investor'));
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
        $investor = Investor::findOrFail($id);

        return view('investors.edit', compact('investor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Requests\InvestorFormValidate $request
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Requests\InvestorFormValidate $request, $id)
    {

        $requestData = $request->all();

        $investor = Investor::findOrFail($id);
        $investor->update($requestData);

        return redirect('investors')->with('flash_message', 'Investor updated!');
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
        Investor::destroy($id);

        return redirect('investors')->with('flash_message', 'Investor deleted!');
    }
}
