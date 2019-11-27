<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\InvestmentPackage;
use Illuminate\Http\Request;

class InvestmentPackagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $investmentpackages = InvestmentPackage::where('breeder_id', 'LIKE', "%$keyword%")
                ->orWhere('grazier_id', 'LIKE', "%$keyword%")
                ->orWhere('seller_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $investmentpackages = InvestmentPackage::latest()->paginate($perPage);
        }

        return view('investment-packages.index', compact('investmentpackages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('investment-packages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        InvestmentPackage::create($requestData);

        return redirect('investment-packages')->with('flash_message', 'InvestmentPackage added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $investmentpackage = InvestmentPackage::findOrFail($id);

        return view('investment-packages.show', compact('investmentpackage'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $investmentpackage = InvestmentPackage::findOrFail($id);

        return view('investment-packages.edit', compact('investmentpackage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $investmentpackage = InvestmentPackage::findOrFail($id);
        $investmentpackage->update($requestData);

        return redirect('investment-packages')->with('flash_message', 'InvestmentPackage updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        InvestmentPackage::destroy($id);

        return redirect('investment-packages')->with('flash_message', 'InvestmentPackage deleted!');
    }
}
