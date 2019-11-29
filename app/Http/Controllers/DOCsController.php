<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\DOC;
use Illuminate\Http\Request;
use Auth;

class DOCsController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:breeder');
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
            $docs = DOC::where('breeder_id', Auth::user()->id)
                ->orWhere('typeChicken', 'LIKE', "%$keyword%")
                ->orWhere('chickenPrice', 'LIKE', "%$keyword%")
                ->orWhere('unit', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $docs = DOC::where('breeder_id', Auth::user()->id)->paginate($perPage);
        }

        return view('d-o-cs.index', compact('docs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('d-o-cs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Requests\DOCFormValidate $request)
    {

        $requestData = $request->all();

        DOC::create([
            'typeChicken' => $request['typeChicken'],
            'chickenPrice' => $request['chickenPrice'],
            'unit' => $request['unit'],
            'breeder_id' => Auth::user()->id,
        ]);

        return redirect()->route('d-o-cs.index')->with('flash_message', 'DOC added!');
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
        $doc = DOC::findOrFail($id);

        return view('d-o-cs.show', compact('doc'));
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
        $doc = DOC::findOrFail($id);

        return view('d-o-cs.edit', compact('doc'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Requests\DOCFormValidate $request, $id)
    {

        $requestData = $request->all();

        $doc = DOC::findOrFail($id);
        $doc->update($requestData);

        return redirect()->route('d-o-cs.index')->with('flash_message', 'DOC updated!');
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
        DOC::destroy($id);

        return redirect('d-o-cs')->with('flash_message', 'DOC deleted!');
    }
}
