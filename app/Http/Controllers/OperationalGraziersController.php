<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\OperationalGrazier;
use Illuminate\Http\Request;
use Auth;

class OperationalGraziersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:grazier');
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
            $operationalgraziers = OperationalGrazier::where('operationalCode', 'LIKE', "%$keyword%")
                ->orWhere('cost', 'LIKE', "%$keyword%")->orWhere('grazier_id', Auth::user()->id)
                ->paginate($perPage);
        } else {
            $operationalgraziers = OperationalGrazier::where('grazier_id', Auth::user()->id)->paginate($perPage);
        }

        return view('operational-graziers.index', compact('operationalgraziers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $getRow = OperationalGrazier::orderBy('id', 'DESC')->get();
        $rowCount = $getRow->count();

        $lastId = $getRow->first();
        $operationalCode = "KOP00001";

        if ($rowCount > 0) {
            if ($lastId->id < 9) {
                $operationalCode = "KOP0000" . '' . ($lastId->id + 1);
            } else if ($lastId->id < 99) {
                $operationalCode = "KOP000" . '' . ($lastId->id + 1);
            } else if ($lastId->id < 999) {
                $operationalCode = "KOP00" . '' . ($lastId->id + 1);
            } else if ($lastId->id < 9999) {
                $operationalCode = "KOP0" . '' . ($lastId->id + 1);
            } else {
                $operationalCode = "KOP" . '' . ($lastId->id + 1);
            }
        }
        return view('operational-graziers.create', compact('operationalCode'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Requests\OperationalGrazierFormValidate $request)
    {

        OperationalGrazier::create([
            'operationalCode' => $request['operationalCode'],
            'cost' => $request['cost'],
            'grazier_id' => Auth::user()->id,
        ]);

        return redirect()->route('operational-graziers.index')->with('flash_message', 'OperationalGrazier added!');
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
        $operationalgrazier = OperationalGrazier::findOrFail($id);

        return view('operational-graziers.show', compact('operationalgrazier'));
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
        $operationalgrazier = OperationalGrazier::findOrFail($id);

        return view('operational-graziers.edit', compact('operationalgrazier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Requests\OperationalGrazierFormValidate $request, $id)
    {

        $requestData = $request->all();

        $operationalgrazier = OperationalGrazier::findOrFail($id);
        $operationalgrazier->update($requestData);

        return redirect()->route('operational-graziers.index')->with('flash_message', 'OperationalGrazier updated!');
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
        OperationalGrazier::destroy($id);

        return redirect('operational-graziers')->with('flash_message', 'OperationalGrazier deleted!');
    }
}
